<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jumbotroncontrollers extends Controller
{
    public function create(){
        return view('/admin/jumbotron/create');
    }
    public function edit(){
        return view('/admin/jumbotron/edit');
    }
}
