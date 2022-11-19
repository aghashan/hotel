<?php

namespace App\Http\Controllers;

use App\Models\jumbotron;
use Illuminate\Http\Request;

class Jumbotroncontrollers extends Controller
{
    public function create(){
        return view('/admin/jumbotron/create');
    }
    public function edit(){
        return view('/admin/jumbotron/edit');
    }
//     public function store(Request $request)
//     {
//         return $request->file('image')->store('images');
       
//     //     $request->validate([
//     //         'filename' => 'required',
//     //         'filename.*' => 'mimes:pdf,jpg,jpeg,png|min:50'
//     //     ]);
//     //     if ($request->hasfile('filename')) {            
//     //         $filename = round(microtime(true) * 100).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
//     //         $request->file('filename')->move(public_path('images'), $filename);
//     //          jumbotron::create(
//     //             [
//     //                 'image' => $filename
//     //             ]
//     //             );  
//     //             echo'success';
//     // }else{
//     //     echo'gagal';
//     // }
// }

public function store(Request $request)
{
    return $request->file('image')->store('images');
}
 }
