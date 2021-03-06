<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{
    function index()
    {
        echo $user="hello from controller";
    }
    function url($name)
    {
        echo $name;
        echo "$name hello";
    }
    function about()
    {
        
       
        $data=['anil','jaya','peter','sandra'];
        return view('about',['user'=>$data]);
         //return view('about');
         //return view('about',['user'=>'jaya']);
    }   
    
}