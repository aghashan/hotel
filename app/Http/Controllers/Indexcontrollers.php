<?php

namespace App\Http\Controllers;

use App\Models\jumbotron;
use App\Models\Special;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function user()
    {
        return view('/detail/userdetail');
    }
    public function login()
    {
        return view('/content/login');
    }
}
