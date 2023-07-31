<?php

namespace App\Http\Controllers\Web\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\FileDraft;
use Illuminate\Support\Facades\Cache;

class FileController extends Controller
{
    /**
     * @param $fileId
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function index($fileId)
    {
        $cacheKey = 'file_v1_' . $fileId;

        if (Cache::has($cacheKey)) {
            $file = Cache::get($cacheKey);
        } else {
            $file = File::find($fileId);

            if (empty($file)) {
                return response()->file(storage_path("app/public/images/default_img.jpg"), array(
                    'Content-Type' => 'image/jpeg'
                ));
            }

            Cache::put($cacheKey, $file, 86400);
        }

        return response()->file(storage_path("app/" . $file->path), array('Content-Type' => $file->mime_type));
    }

    /**
     * @param $fileId
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     * Draft
     */
    public function draft($fileId)
    {
        $cacheKey = 'file_draft_v1_' . $fileId;

        if (Cache::has($cacheKey)) {
            $file = Cache::get($cacheKey);
        } else {
            $file = FileDraft::find($fileId);

            if (empty($file)) {
                return response()->file(storage_path("app/public/images/default_img.jpg"), array(
                    'Content-Type' => 'image/jpeg'
                ));
            }

            Cache::put($cacheKey, $file, 86400);
        }

        return response()->file(storage_path("app/" . $file->path), array('Content-Type' => $file->mime_type));
    }
}

