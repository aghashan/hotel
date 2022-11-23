<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Room;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $validasi = \Validator::make($request->all(), [
            'jenis_kamar' => 'required',
            'harga' => 'required',
            'room_name' => 'required',
            'no_room' => 'required',
            'total_room' => 'required',
            'kapasitas' => 'required',
            'bed' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|image|max:2048',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);
        if ($validasi->fails()) {
            return view('/admin/room/create');
        } else {
            if ($request->hasfile('image')) {
                $path = $request->file('image')->store('images');
            } else {
                $path = '';
            }

            $r = new Room;
            $r->jenis_kamar = $request['jenis_kamar'];
            $r->harga = $request['harga'];
            $r->room_name = $request['room_name'];
            $r->no_room = $request['no_room'];
            $r->total_room = $request['total_room'];
            $r->kapasitas = $request['kapasitas'];
            $r->bed = $request['bed'];
            $r->deskripsi = $request['deskripsi'];
            $r->gambar = $path;
            $r->status = $request['status'];
            $r->save();
        }
        return redirect('/secret/admin/room');
    }

    public function edit(Request $request,$id)
    {
        $validasi = \Validator::make($request->all(), [
            'room_name'=>'required',
            'no_room'=>'required',
            'deskripsi'=>'required',
            'harga'=>'required',
            'jenis_kamar'=>'required',
            'total_room'=>'required',
            'kapasitas'=>'required',
            'bed'=>'required',
            'status'=>'required',
            'gambar' => 'mimes:jpeg,jpg,png|image|max:5048'
        ]);
        if ($validasi->fails()) {
            return redirect('secret/admin/room/edit/'.$id);
        } else {
            $p = room::find($id);
            if ($request->hasfile('gambar')) {
                $path = $request->file('gambar')->store('images');
            } else {
                $path = $p->gambar;
            }
            $p->room_name =$request['room_name'];
            $p->no_room =$request['no_room'];
            $p->deskripsi =$request['deskripsi'];
            $p->harga =$request['harga'];
            $p->jenis_kamar =$request['jenis_kamar'];
            $p->total_room =$request['total_room'];
            $p->kapasitas =$request['kapasitas'];
            $p->bed =$request['bed'];
            $p->status =$request['status'];
            $p->gambar = $path;
            $p->save();                                                
            return redirect('/secret/admin/room');
        }
        return view('/secret/admin/room');

    }

    public function destroy($id)
    {
        $room = Room::where('id', $id)->first();
        Storage::delete($room->gambar);
        $room->delete();
        return redirect('/secret/admin/room');
    }
}
