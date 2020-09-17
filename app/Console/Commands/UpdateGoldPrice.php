<?php

namespace App\Console\Commands;

use App\Models\GoldPrice;
use Illuminate\Console\Command;

class UpdateGoldPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gold:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update gold price';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = 'http://www.sjc.com.vn/xml/tygiavang.xml';
        $xml = simplexml_load_file($url);
        $xmlString = $xml->asXML();
        $goldPrice = GoldPrice::firstOrNew();
        $goldPrice->data = str_replace(array("\n", "\r", "\t"), '', $xmlString);
        $goldPrice->save();

        return 0;
    }
}
