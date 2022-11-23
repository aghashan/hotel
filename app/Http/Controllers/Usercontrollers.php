<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class usercontrollers extends Controller
{
    public function user()
    {
        return view('/detail/userdetail');
    }
    public function login(Request $request)
    {

        $data = [
            'username' => $request['username'],
            'password' => $request['password']
        ];
        if (Auth::attempt($data)) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function register(Request $request)
    {
        $validasi = \Validator::make($request->all(), [
            'no_tlp' => 'required',
            'email' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);
        if ($validasi->fails()) {
            return view('/content/register');
        } else {
            $user = new User;
            $user->no_tlp = $request['no_tlp'];
            $user->email = $request['email'];
            $user->username = $request['username'];
            $user->password = Hash::make($request['password']);
            $user->role = ("admin");
            $user->save();
            return redirect('/login');
        }
    }

    public function create(Request $request)
    {

        $validasi = \Validator::make($request->all(), [
            'no_tlp' => 'required',
            'email' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',

        ]);
        if ($validasi->fails()) {
            return view('/admin/user/create');
        } else {
            $user = new User;
            $user->no_tlp = $request['no_tlp'];
            $user->email = $request['email'];
            $user->username = $request['username'];
            $user->password = Hash::make($request['password']);
            $user->save();
            return redirect('/secret/admin/usermanage/');
        }
    }
    public  function edit()
    {
        return view('/admin/user/edit');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
  
        return Redirect('/login');
    }
   
    public function destroy($id)
    {
        $room = User::where('id', $id);

        $room->delete();

        return redirect('/secret/admin/usermanage');
    }
}
