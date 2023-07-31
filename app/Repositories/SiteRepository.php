<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Site;
use Illuminate\Support\Facades\Cache;

/**
 * Class SiteRepository
 * @package App\Repositories
 */
class SiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Site::class;
    }

    /**
     * @param $siteCode
     * @return mixed
     */
    public function getSiteIdByCode($siteCode)
    {
        return Cache::remember('get_site_id_by_sites_code_' . $siteCode, 300, function () use ($siteCode) {
            $site = Site::where('code', $siteCode)->first();

            if (empty($site)) return null;

            return $site->id;
        });
    }
}
