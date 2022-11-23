<?php

namespace App\Http\Controllers;

use App\Models\jumbotron;
use App\Models\Special;
use Illuminate\Http\Request;

class Indexcontrollers extends Controller
{
    public function home()
    {
        $special = Special::all();
        $data = jumbotron::all();
        return view('/content/Home', [
            'data' => $data,
            'special' => $special
        ]);
    }

    public function login()
    {
        return view('/content/login');
    }
}
