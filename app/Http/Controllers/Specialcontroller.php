<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Specialcontroller extends Controller
{
    public function create(){
        return view('/admin/special/create');
    }
    public function edit(){
        return view('/admin/special/edit');
    }
}
