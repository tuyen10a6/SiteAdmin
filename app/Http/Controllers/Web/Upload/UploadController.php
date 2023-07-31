<?php

namespace App\Http\Controllers\Web\Upload;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\File_draft;
use App\Models\FileDraft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $files = $request->file("files");

            if (!is_array($files)) {
                throw new \Exception('No files uploaded');
            }

            $uploadedFiles = [];

            foreach ($files as $file) {
                $pathToImage = Storage::putFile(
                    'public/photos/' . $request->user()->id . '/original',
                    $file
                );

                $fileDraft = new FileDraft();
                $fileDraft->id = (string)Str::uuid();
                $fileDraft->user_id = $request->user()->id;
                $fileDraft->name = last(explode("/", $pathToImage));
                $fileDraft->mime_type = $file->getClientMimeType();
                $fileDraft->path = $pathToImage;
                $fileDraft->expired_at = time() + 84600;
                $fileDraft->save();

                $uploadedFiles[] = $fileDraft;
            }

            return $this->sendSuccess([
                "files" => $uploadedFiles
            ]);
        } catch (\Exception $exception) {
            return $this->sendError($exception->getMessage());
        }
    }
}

