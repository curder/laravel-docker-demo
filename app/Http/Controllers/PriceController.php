<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::latest()->paginate(50);

        return view('prices.index', [
            'prices' => $prices
        ]);
    }
}
