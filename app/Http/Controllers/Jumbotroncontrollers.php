<?php

namespace App\Http\Controllers;

use App\Models\jumbotron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Jumbotroncontrollers extends Controller
{
    public function store(Request $request)
    {
        $validasi = \Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,jpg,png|image|max:5048'
        ]);
        if ($validasi->fails()) {
            return view('/admin/jumbotron/create');
        } else {
            if ($request->hasfile('image')) {
                $path = $request->file('image')->store('images');
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
    public function edit(Request $request,$id)
    {
       
        $validasi = \Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,jpg,png|image|max:5048'
        ]);
        if ($validasi->fails()) {
            return redirect('secret/admin/jumbotron/edit/'.$id);
        } else {
            if ($request->hasfile('image')) {
                $path = $request->file('image')->store('images');
            } else {
                $path = '';
            }
            $p = jumbotron::find($id);
            $p->image = $path;
            $p->save();                                                
            return redirect('/secret/admin/jumbotron');
        }
        return view('/secret/admin/jumbotron');
    }

    public function destroy($id)
    {
        $jumbotron = jumbotron::where('id', $id)->first();
        Storage::delete($jumbotron->image);
        $jumbotron->delete();
        return redirect('/secret/admin/jumbotron');
    }
}
