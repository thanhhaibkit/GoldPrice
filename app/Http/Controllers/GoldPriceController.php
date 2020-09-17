<?php
namespace App\Http\Controllers;

use App\Models\GoldPrice;

class GoldPriceController extends Controller
{
    public function __invoke()
    {
        $goldPriceXml = null;
        $goldPrice = GoldPrice::first();
        if ($goldPrice->data) {
            $xmlString = $goldPrice->data;
            $goldPriceXml = simplexml_load_string($xmlString)->ratelist[0];
        }

        return view('gold.price', ['goldPrice' => $goldPriceXml]);
    }
}
