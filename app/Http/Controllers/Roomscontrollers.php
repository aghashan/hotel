<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Dotenv\Validator;
use Illuminate\Http\Request;

class Roomscontrollers extends Controller
{
    public function room()
    {
        $data = Room::all()->first();
        return view('/content/Room')->with('data', $data);
    }
    public function roomdetail()
    {
        return view('/detail/Roomdetail');
    }

    public function viewroom()
    {
        $data = Room::all()->first();
        return view('/detail/Roomdetail')->with('data', $data);
    }

public function create(){
    return view('/admin/room/create');
}

    public function edit(Request $request)
    {
       return view('/admin/room/edit');
    }
}
