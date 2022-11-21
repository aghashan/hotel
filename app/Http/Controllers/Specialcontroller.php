<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special;

class Specialcontroller extends Controller
{
    public function store(Request $request)
    {
        $validasi = \Validator::make($request->all(),[
            'deskripsi' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|image|max:5048'
        ]);
        if ($validasi->fails()) {
            return view('/admin/special/create');
        } else {
            if ($request->hasfile('image')) {
                $path = $request->file('image')->store('images');
             } else {
                $path = '';
             }

             $p = new Special;
             $p->deskripsi = $request['deskripsi'];
             $p->image = $path;
             $p->save();
             return redirect('/secret/admin/special');
    }
    return view('/secret/admin/special');
}
    public function edit(){
        return view('/admin/special/edit');
    }
    
}
