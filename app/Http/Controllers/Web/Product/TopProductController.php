<?php

namespace App\Http\Controllers\Web\Product;

use App\Models\TopProduct;
use App\Repositories\CategoryRepository;
use App\Repositories\SiteRepository;
use Illuminate\Http\Request;

class TopProductController
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var $siteRepository
     */
    protected $siteRepository;

    /**
     * HotProductController constructor.
     * @param CategoryRepository $categoryRepository
     * @param SiteRepository $siteRepository
     */
    public function __construct(CategoryRepository $categoryRepository, SiteRepository $siteRepository)
    {
        $this->categoryRepository = $categoryRepository;

        $this->siteRepository = $siteRepository;
    }

    /**
     * @param $code
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($code)
    {
        $categories = $this->categoryRepository->getCategoryBySiteId($this->siteRepository->getSiteIdByCode($code));

        $topProducts = TopProduct::where('site_id', $this->siteRepository->getSiteIdByCode($code))
            ->with(['product' => function ($query) {
                $query->select([
                    "id",
                    "name",
                    "site_id",
                    "slug",
                    "price",
                    "default_img"
                ]);
            }])
            ->get();

        return view('web.shop.shop_configs.featured_products', [
            'categories' => $categories,
            'topProducts' => $topProducts
        ]);
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($code, Request $request)
    {
        $request->validate([
            'product_ids' => 'array|distinct|max:6',
        ]);

        if (!$request->has('product_ids')) {
            return redirect()->route('products.featured_product', ['code' => $code]);
        }

        $topProductIds = TopProduct::where('site_id', $this->siteRepository->getSiteIdByCode($code))
            ->pluck('product_id')
            ->toArray();

        $uniqueNewProductIds = array_diff($request->get('product_ids'), $topProductIds);

        if (empty($uniqueNewProductIds)) {
            return redirect()->route('products.featured_product', ['code' => $code]);
        }

        $aryHotProducts = [];

        foreach ($uniqueNewProductIds as $productId) {
            $aryHotProducts[] = [
                'site_id' => $this->siteRepository->getSiteIdByCode($code),
                'product_id' => $productId,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ];
        }

        if (count($topProductIds) + count($aryHotProducts) > 6) {
            return redirect()->back()->withErrors(["message" => "Tối đa 6 sản phẩm!"]);
        }

        if (!empty($aryHotProducts)) {
            TopProduct::insert($aryHotProducts);
        }

        return redirect()->route('products.featured_product', ['code' => $code]);
    }

    /**
     * @param $code
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($code, $id)
    {
        TopProduct::where('site_id', $this->siteRepository->getSiteIdByCode($code))
            ->where('product_id', $id)
            ->delete();

        return redirect()->route('products.featured_product', ['code' => $code]);
    }
}