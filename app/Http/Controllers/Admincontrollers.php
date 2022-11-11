<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontrollers extends Controller
{
    public function page()
    {
        return view('/admin/index');
    }
    public function rooms()
    {
        return view('/admin/room/index');
    }
    public function special()
    {
        return view('/admin/special/index');
    }
    public function jumbotron()
    {
        return view('/admin/jumbotron/index');
    }
}
