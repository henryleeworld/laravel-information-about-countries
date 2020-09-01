<?php

namespace App\Http\Controllers;

use PragmaRX\Countries\Package\Countries;

class CountryController extends Controller
{
    public function index()
    {
        $taiwan = Countries::where('iso_3166_1_alpha3', 'TWN')->first();
        $currency = $taiwan->currencies->first();
        echo '國家全名：' .$taiwan['name_long'] . PHP_EOL;
        echo '國家首都：' . $taiwan->capital_rinvex . PHP_EOL;
        echo '國家貨幣：' . $currency . PHP_EOL;
    }
}
