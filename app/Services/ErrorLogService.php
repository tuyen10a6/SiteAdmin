<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class ErrorLogService
{

    public function __construct()
    {

    }

    /***
     * @param $apiName
     * @param $exception
     * @param array $dataRequest
     * @return string
     */
    public static function logException($apiName, $exception, $dataRequest = [])
    {
        $message = "[API_ERROR]" . $apiName;

        $message .= ": " . $exception->getMessage();

        $message .= " | Line: " . $exception->getLine();

        $message .= " | File: " . $exception->getFile();

        $message .= " | Request: " . json_encode($dataRequest);

        Log::error($message);

        if (config("app.env") == "production") {
            $message = "System Errors!";
        }

        return $message;
    }
}