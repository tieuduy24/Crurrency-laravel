<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function convert()
    {
        dd('TEST');
    }
}
