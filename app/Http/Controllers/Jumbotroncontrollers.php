<?php

namespace App\Http\Controllers;

use App\Models\jumbotron;
use Illuminate\Http\Request;

class Jumbotroncontrollers extends Controller
{
    public function store(Request $request)
    {
        $image = $request->image;
        $validasi = \Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,jpg,png|image'
        ]);
        if ($validasi->fails()) {
            return view('/admin/jumbotron/create');
        } else {
            if ($request->hasfile('image')) {
                $path = $request->file('image')->store('uploads');
            } else {
                $path = '';
            }
            $p = new jumbotron;
            $p->image = $path;
            $p->save();
            return redirect('/secret/admin/jumbotron');
        }
        return view('/secret/admin/jumbotron');
    }
    public function edit()
    {
        return view('/admin/jumbotron/edit');
    }
}
