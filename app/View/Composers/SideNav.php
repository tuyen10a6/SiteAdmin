<?php

namespace App\View\Composers;


use App\Models\Category;
use App\Models\Site;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

/**
 * Class SideNav
 * @package App\View\Composers
 */
class SideNav
{
    /**
     * @var $categories
     */
    private $data;

    /**
     * @var $request
     */
    private $request;

    /**
     * SideNav constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        if (Auth::user()) {
            if (!$this->data) {
                $this->data = Cache::remember('sidebar_data_by_user_' . Auth::user()->id . "_v1", 1, function () {

                    $sites = Site::where('user_id', Auth::user()->id)->first();

                    return ['sites' => $sites];
                });
            }

            $view->with($this->data);
        }
    }
}