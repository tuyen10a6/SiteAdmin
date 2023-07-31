<?php

namespace App\Services\Site;


use App\Models\Site;

class SiteService
{
    /**
     * @param $siteCode
     * @return mixed
     */
    public static function getSiteIdByCode($siteCode)
    {
        $id = Site::where('code', $siteCode)->first();

        if (empty($id)){
            return 0;
        }

        return $id->id;
    }
}
