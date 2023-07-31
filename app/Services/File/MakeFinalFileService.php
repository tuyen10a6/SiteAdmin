<?php

namespace App\Services\File;

use App\Models\File;
use App\Models\FileDraft;

class MakeFinalFileService
{
    /**
     * @param $fileDraftId
     * @return mixed
     */
    public static function convertDraftToFinal($fileDraftId)
    {
        $fileDraft = FileDraft::find($fileDraftId);

        if (empty($fileDraft)) {
            return [
                "status" => false,
                "message" => "File id is not exist!",
                "file" => []
            ];
        }

        $file = new File();
        $file->id = $fileDraftId;
        $file->type = File::FILE_TYPE_IS_IMG;
        $file->user_id = $fileDraft->user_id;
        $file->name = $fileDraft->name;
        $file->mime_type = $fileDraft->mime_type;
        $file->path = $fileDraft->path;
        $file->save();

        $fileDraft->delete();

        return [
            "status" => true,
            "message" => "success",
            "file" => $file
        ];
    }
}
