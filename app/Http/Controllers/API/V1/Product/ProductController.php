<?php

namespace App\Http\Controllers\API\V1\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Site\SiteService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param $code
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     */
    public function index($code, Request $request)
    {
        $pageSize = 3;

        if ($request->has("page_size")) {
            $pageSize = $request->get("page_size");
        }

        $query = Product::where("site_id", SiteService::getSiteIdByCode($code));

        if ($request->has("category_id") && $request->get('category_id') != 0) {
            $query = $query->where("category_id", $request->get("category_id"));
        }

        $products = $query->select([
            "id",
            "name",
            "slug",
            "price",
            "default_img",
            "description"
        ])->paginate($pageSize);

        return $this->sendSuccess([
            "products" => $products
        ]);
    }
}