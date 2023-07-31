<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramService
{
    const BOT_TOKEN = "5947006791:AAFkM2icdKDxB_67VS1Lzg4OMDDI9Wc7zdA";
    const BOT_BASE_URL = "https://api.telegram.org/bot" . self::BOT_TOKEN;
    const BOT_SENT_MESSAGE_END_POINT = "/sendMessage";

    public function __construct()
    {

    }

    public static function sent($message)
    {
        $params = [
            'chat_id' => -875660940,
            'text' => substr($message, 0)
        ];

        $response = Http::get(self::BOT_BASE_URL . self::BOT_SENT_MESSAGE_END_POINT, $params);

        return $response->json();
    }

    public static function getUpdate()
    {
        $response = Http::get(self::BOT_BASE_URL . "/getUpdates");
        pd($response->json());
    }
}
