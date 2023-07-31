<?php

namespace App\Http\Controllers\Web\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\ProductVideos;
use App\Services\File\DeleteFileService;
use App\Services\File\MakeFinalFileService;
use App\Services\Site\SiteService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        Paginator::useBootstrap();

        $categories = Category::where('site_id', SiteService::getSiteIdByCode($code))->get();

        $products = Product::where('site_id', SiteService::getSiteIdByCode($code))->paginate(10);

        return view('web.products.index', ['categories' => $categories, 'products' => $products]);
    }

    /**
     * @param $code
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function getProductByCategory($code, $slug)
    {
        $categories = Category::where('site_id', SiteService::getSiteIdByCode($code))->get();

        $category = $categories->where('site_id', SiteService::getSiteIdByCode($code))->where("slug", $slug)->first();

        if (empty($category)) {
            return redirect()->back();
        }

        if (empty($slug)) {
            return redirect()->back()->withErrors(["message" => "Category is not exist!"]);
        }

        $products = $category->products()->paginate(10);

        return view('web.products.index', ['categories' => $categories, 'products' => $products]);
    }

    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create($code)
    {
        $categories = Category::where('site_id', SiteService::getSiteIdByCode($code))->get();

        return view('web.products.create', ['categories' => $categories]);
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($code, Request $request)
    {

        $product = Product::create([
            'site_id' => SiteService::getSiteIdByCode($code),
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-'),
            'default_img' => $request->input('file_id')[0],
            'status' => 1,
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        foreach ($request->input('file_id') as $value) {
            $response = MakeFinalFileService::convertDraftToFinal($value);

            if (!$response["status"]) {
                return redirect()->back()->withErrors(["message" => "Upload file errors!"]);
            }

            $aryProductImages[] = [
                'product_id' => $product->id,
                'file_id' => $value
            ];
        }

        if (isset($aryProductImages)) {
            ProductImages::insert($aryProductImages);
        }

        foreach ($request->input('url') as $value) {
            if (!empty($value)) {
                $aryProductLink[] = [
                    'product_id' => $product->id,
                    'video_link' => $value,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ];
            }
        }

        if (isset($aryProductLink)) {
            ProductVideos::insert($aryProductLink);
        }

        return redirect(route('products', ['code' => $code]));
    }

    /**
     * @param $code
     * @param $slugProducts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($code, $slugProducts)
    {
        $categories = Category::where('site_id', SiteService::getSiteIdByCode($code))->get();

        $product = Product::where('site_id', SiteService::getSiteIdByCode($code))->where('slug', $slugProducts)->first();

        $productImages = ProductImages::where('product_id', $product->id)->get();

        return view('web.products.edit', [
            'categories' => $categories,
            'productImages' => $productImages,
            'product' => $product,
        ]);
    }

    /**
     * @param $code
     * @param $slugProducts
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($code, $slugProducts, Request $request)
    {
        $product = Product::where('site_id', SiteService::getSiteIdByCode($code))->where('slug', $slugProducts)->first();

        if ($request->has('file_id')) {
            foreach ($request->get('file_id') as $value) {
                $convertFileResponse = MakeFinalFileService::convertDraftToFinal($value);

                if (!$convertFileResponse["status"]) {
                    return redirect()->back()->withErrors(["message" => "File errors"]);
                }

                $aryProductImages[] = [
                    'product_id' => $product->id,
                    'file_id' => $value
                ];
            }
        }

        if ($request->has('deleteImg')) {
            ProductImages::where("product_id", $product->id)
                ->whereIn("file_id", $request->get('deleteImg'))
                ->delete();

            foreach ($request->get('deleteImg') as $value) {
                $deleteFileResponse = DeleteFileService::delete($value);

                if (!$deleteFileResponse["status"]) {
                    return redirect()->back()->withErrors(["message" => $deleteFileResponse["message"]]);
                }
            }
        }

        if (isset($aryProductImages)) {
            ProductImages::insert($aryProductImages);
        }

        $product->update($request->except("file_id"));



        return redirect()->route("products", [
            'code' => $code
        ]);
    }

    /**
     * @param $code
     * @param $slugProducts
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($code, $slugProducts)
    {
        Product::where('site_id', SiteService::getSiteIdByCode($code))
            ->where('slug', $slugProducts)
            ->first()
            ->delete();

        return redirect(route('products', [
            'code' => $code,
        ]));
    }
}