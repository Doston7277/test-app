<?php
namespace App\Helpers;


class ScraperDataSend
{
    public static function send_scraper_data($message)
    {
        $url = "https://api.telegram.org/bot5974862170:AAEiEKBttkUpzzyT6U7GggnyWQmtx-f5Ud0/sendMessage?chat_id=1790084729" ;
        $url = $url . "&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }
}