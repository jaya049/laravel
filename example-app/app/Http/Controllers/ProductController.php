<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function insert(Request $req)
    {
        $prod=new Product;
        $prod->product=$req->product;
        $prod->price=$req->price;
        $prod->quantity=$req->quantity;
        $prod->save();
        return redirect('product_list');
    }
    function product_view_list()
        {
            $data=Product::all();
            return view('product_list',['row'=>$data]);
        }
        function prodelete($id)
        {
            $data=Product::find($id);
            $data->delete();
            return redirect('product_list');
        }

        function product_updates($id)
        {
            $data=Product::find($id);
            return view('product_update',['row'=>$data]);
            
        }
       
        function proupdate(Request $req)
        {
            $data=Product::find($req->id);
            $data->product=$req->product;
            $data->price=$req->price;
            $data->quantity=$req->quantity;
            $data->save();
            return redirect('product_list');
        }
        
        function welcomepage(Request $req)
        {
            $data=$req->input();
            $req->session()->put('user',$data['username']);
            return redirect('profile');
        }
        
       
}
    