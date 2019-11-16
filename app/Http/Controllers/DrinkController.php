<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index(Request $request)
    {
        return view('drink.index');
    }
}
