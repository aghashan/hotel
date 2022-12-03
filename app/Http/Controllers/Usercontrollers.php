<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class usercontrollers extends Controller
{
   
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
            $user->role = ("member");
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
            $user->role = $request['role'];
            $user->save();
            return redirect('/secret/admin/usermanage/');
        }
    }
    public  function edit(Request $request,$id)
    {
        $validasi = \Validator::make($request->all(), [
            'username'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required',
            'no_tlp'=>'required'
        ]);if ($validasi->fails()) {
            return redirect('/secret/admin/usermanage/edit/'.$id);
        } else {
            $p = User::find($id);
            $p->username = $request['username'];
            $p->email =$request['email'];
            $p->role =$request['role'];
            $p->password =$request['password'];
            $p->no_tlp =$request['no_tlp'];
            $p->save();
            return redirect('/secret/admin/usermanage');
        }
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
