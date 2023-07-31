<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;

/**
 * Class BrandRepository
 * @package App\Repositories
 * @version December 22, 2020, 8:03 am UTC
 */
class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'site_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Category::class;
    }

    /**
     * @param $siteId
     * @return mixed
     */
    public function getCategoryBySiteId($siteId)
    {
        return Cache::remember('sites_' . $siteId . '_categories_v2', 300, function () use ($siteId) {
            return $this->all([
                "site_id" => $siteId
            ]);
        });
    }
}
