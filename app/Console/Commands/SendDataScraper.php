<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\ScraperDataSend;
use Goutte\Client;

class SendDataScraper extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:datascraper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $url = 'https://aqicn.org/city/uzbekistan/tashkent/us-embassy';
        $page = $client->request('GET', $url);
        $data = $page->filter('.aqivalue')->text();

        ScraperDataSend::send_scraper_data($data);
    }
}
