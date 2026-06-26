<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController
{
    public function index() {
        $images = [
        'images/leerlingen/leerling1.jpeg',
        'images/leerlingen/leerling2.jpeg',
        'images/leerlingen/leerling3.jpeg',
        'images/leerlingen/leerling4.jpeg',
        'images/leerlingen/leerling5.jpeg',
        'images/leerlingen/leerling6.jpeg',
        'images/leerlingen/leerling7.jpeg',
        'images/leerlingen/leerling8.jpeg',
    ];
        return view('pages.index', compact('images'));
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
