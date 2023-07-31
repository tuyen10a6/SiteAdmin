<?php

namespace App\Services\File;

use App\Models\File;
use App\Models\FileDraft;

class DeleteFileService
{
    /**
     * @param $fileId
     * @return mixed
     */
    public static function delete($fileId)
    {
        $file = File::find($fileId);

        if (empty($file)) {
            return [
                "status" => false,
                "message" => "File is not exist!",
                "file" => []
            ];
        }

        unlink(storage_path("app/" . $file->path));

        $file->delete();

        return [
            "status" => true,
            "message" => "success",
            "file" => []
        ];
    }
}
