<?php

namespace App\Http\Controllers\Web\Shop;

use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Models\Theme;
use App\Services\File\DeleteFileService;
use App\Services\File\MakeFinalFileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopConfigController extends Controller
{
    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function about($code)
    {
        $site = Site::where('code', $code)->first();

        if (empty($site)) {
            return redirect()->back();
        }

        $themes = Theme::get();

        $configs = json_decode($site->config);

        return view('web.shop.shop_configs.about', [
            'site' => $site,
            'themes' => $themes,
            'configs' => $configs
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function tiktok()
    {
        return view('web.shop.shop_configs.tiktok');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function qrCode()
    {
        return view('web.shop.shop_configs.qr_code');
    }

    public function create()
    {
        $themes = Theme::get();

        return view('web.shop.shop_configs.create', ['themes' => $themes]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|unique:sites',
            'phone' => 'required|min:8|unique:sites',
            'code' => 'required|unique:sites',
        ]);

        $response = MakeFinalFileService::convertDraftToFinal($request->input('configs')["avatar"]);

        if (!$response["status"]) {
            return redirect()->back()->withErrors(["message" => "Upload file errors!"]);
        }

        $site = Site::create([
            'user_id' => Auth::user()->id,
            'theme_id' => $request->input('theme_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'code' => $request->input('code'),
            'config' => json_encode($request->input('configs')),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);

        return redirect(route('shops.home.show', [$site->code]));
    }

    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show($code)
    {
        $site = Site::where('code', $code)->first();

        if (empty($site)) {
            return redirect()->back();
        }

        $themes = Theme::get();

        $configs = json_decode($site->config);

        return view('web.shop.shop_configs.edit', [
            'site' => $site,
            'themes' => $themes,
            'configs' => $configs
        ]);
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($code, Request $request)
    {
        $site = Site::where('code', $code)->first();

        $configs = json_decode($site->config, true);

        if ($configs["avatar"] != $request->get("configs")["avatar"]) {
            $convertFileResponse = MakeFinalFileService::convertDraftToFinal($request->get("configs")["avatar"]);

            if (!$convertFileResponse["status"]) {
                return redirect()->back()->withErrors(["message" => "File errors"]);
            }

            $deleteFileResponse = DeleteFileService::delete($configs["avatar"]);

            if (!$deleteFileResponse["status"]) {
                return redirect()->back()->withErrors(["message" => $deleteFileResponse["message"]]);
            }
        }

        foreach ($request->get("configs") as $key => $val) {
            $configs[$key] = $val;
        }

        $request->merge(["config" => json_encode($configs)]);

        $site->update($request->all());

        return redirect(route('shops.home.show', [$site->code]));
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateChatApp($code, Request $request)
    {
        $site = Site::where('code', $code)->first();

        if (!isset(json_decode($site->config)->zalo) || !isset(json_decode($site->config)->messenger) ||
            json_decode($site->config)->messenger || json_decode($site->config)->zalo) {
            $config = json_decode($site->config);

            $config->zalo = $request->input('zalo');

            $config->messenger = $request->input('messenger');

            $site->config = json_encode($config);

            $site->save();
        }

        return redirect(route('shops.home.show', [$site->code]));
    }
}
