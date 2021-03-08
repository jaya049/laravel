<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Auth;

class UserAuthController extends Controller
{
    //insert data into db
    function validate_reg(Request $req)
    {
        $req->validate([
            'username'=>'required|regex:/^[\pL\s\-]+/u|max:20',
            'email'=>'required|email|unique:auths',
            'password'=>'required|alpha_num|min:6'
        ]);
        $data=new Auth;
        $data->username=$req->username;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $query=$data->save();
        if($query)
        {
            return back()->with('success','successfully registered');
        }
        else{
            return back()->with('fail','something went wrong');
        } 
    }

    function check(Request $req)
    {
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $userinfo=Auth::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Your email is not recognized!');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->Session()->put('LoggedUser',$userinfo->id);
                return view('auth.dashboard');
            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }
    }

    function dashboard()
    {
        $data=['LoggedUserInfo'=>Auth::where('id','=',Session('LoggedUser'))->first()];
        return view('dashboard',$data);
    }

    
    
}
