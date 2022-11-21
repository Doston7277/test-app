<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{

    private $results = array();

    public function scraper(){


        $client = new Client();
        $url = 'https://aqicn.org/city/uzbekistan/tashkent/us-embassy';
        $page = $client->request('GET', $url);
        $data = $page->filter('.aqivalue')->text();

        

        // echo "<pre>";
        // print_r($page);

        return view('scraper', compact('data'));
    }
}
