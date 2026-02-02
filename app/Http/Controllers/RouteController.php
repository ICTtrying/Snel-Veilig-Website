<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController
{
    public function index() {
        return view('pages.index');
    }

    public function overOns() {
        return view('pages.overOns');
    }

    public function pakketten() {
        return view('pages.pakketten');
    }

    public function contact() {
        return view('pages.contact');
    }
}
