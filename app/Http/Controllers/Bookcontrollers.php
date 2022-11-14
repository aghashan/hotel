<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookcontrollers extends Controller
{
    public function book(){
        return view('/content/booknow');
    }
}
