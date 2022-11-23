<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\jumbotron;
use App\Models\User;
use App\Models\Special;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Admincontrollers extends Controller
{
    public function loginadmin(Request $request)
    {
        return view ('/admin/login');
    }
    public function page()
    {
        return view('/admin/index');
    }
    public function rooms()
    {
        $data = Room::all();
        return view('/admin/room/index')->with('data', $data);
    }
    public function special()
    {
        $data = special::all();
        return view('/admin/special/index')->with('data', $data);
    }
    public function jumbotron()
    {
        $data = jumbotron::all();
        return view('/admin/jumbotron/index')->with('data', $data);
    }
    public function editjumbotron($id)
    {
        $data = jumbotron::find($id);
        return view('/admin/jumbotron/edit')->with('data', $data);
    }
    public function editroom($id)
    {
        $data = room::find($id);
        return view('/admin/room/edit')->with('data', $data);
    }
    public function editspecial($id)
    {
        $data = special::find($id);
        return view('/admin/special/edit')->with('data', $data);
    }
    public function usermanage()
    {
        $data = user::all();
        return view('/admin/user/index')->with('data', $data);
    }
}
