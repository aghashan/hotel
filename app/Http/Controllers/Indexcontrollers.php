<?php

namespace App\Http\Controllers;
use App\Models\jumbotron;
use Illuminate\Http\Request;

class Indexcontrollers extends Controller
{
    public function home()
    {
        $data = jumbotron::all();
        return view('/content/Home')->with('data', $data);
    }

    public function login(){
        return view('/content/login');
    }
}
