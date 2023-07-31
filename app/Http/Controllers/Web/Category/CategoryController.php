<?php

namespace App\Http\Controllers\Web\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Site;
use App\Services\File\DeleteFileService;
use App\Services\File\MakeFinalFileService;
use App\Services\Site\SiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        $categories = Category::where('site_id',SiteService::getSiteIdByCode($code))
            ->where('status', 1)
            ->orderBy('position')
            ->paginate(4);

        return view('web.categories.index', ['categories' => $categories]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $sites = Site::get();

        return view('web.categories.create', ['sites' => $sites]);
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($code, Request $request)
    {

        foreach ($request->input('file_id') as $value) {
            $response = MakeFinalFileService::convertDraftToFinal($value);

            if (!$response["status"]) {
                return redirect()->back()->withErrors(["message" => "Upload file errors!"]);
            }
        }

        Category::create([
            'name' => (string)$request->input('name'),
            'position' => (int)$request->input('position'),
            'file_id' => (string)$request->input('file_id')[0],
            'site_id' => SiteService::getSiteIdByCode($code),
            'slug' => Str::slug($request->input('name'), '-'),
            'status' => (string)$request->input('status'),
        ]);

        return redirect(route('categories', [
            "code" => $code
        ]));
    }

    /**
     * @param $code
     * @param $categoryId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($code, $categoryId)
    {
        $category = Category::where('site_id',SiteService::getSiteIdByCode($code))
            ->where('id', $categoryId)->first();

        return view('web.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * @param $code
     * @param $categoryId
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($code, $categoryId, Request $request)
    {
        $category = Category::where('site_id',SiteService::getSiteIdByCode($code))
            ->where('id', $categoryId)->first();

        if ($category->file_id != $request->input('file_id')) {
            $convertFileResponse = MakeFinalFileService::convertDraftToFinal($request->input('file_id')[0]);

            if (!$convertFileResponse["status"]) {
                return redirect()->back()->withErrors(["message" => "File errors"]);
            }

            $deleteFileResponse = DeleteFileService::delete($category->file_id);

            if (!$deleteFileResponse["status"]) {
                return redirect()->back()->withErrors(["message" => $deleteFileResponse["message"]]);
            }

            $category->file_id = $request->get('file_id')[0];
        }


        $category->update($request->except("file_id"));

        return redirect(route('categories', [
            "code" => $code
        ]));
    }

    /**
     * @param $code
     * @param $slug
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function remove($code, $slug)
    {
        Category::where('site_id',SiteService::getSiteIdByCode($code))
            ->where('slug', $slug)
            ->delete();

        return redirect(route('categories', [
            "code" => $code
        ]));
    }
}