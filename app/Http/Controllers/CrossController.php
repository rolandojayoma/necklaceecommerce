<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrossController extends Controller
{
    public function cross()
    {
        return view('cross');
    }
    public function linkUp()
    {
        return view('linkup');
    }
    public function gold()
    {
        return view('gold');
    }
    public function cartDouble()
    {
        return view('cart_double');
    }
    public function cartLinkup()
    {
        return view('cart_linkup');
    }
    public function cartGold()
    {
        return view('cart_gold');
    }
}