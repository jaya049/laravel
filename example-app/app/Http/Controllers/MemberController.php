<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{

        function memberadd(Request $req)
        {
            $member=new member;
            $member->members_name=$req->name;
            $member->email=$req->email;
            $member->address=$req->address;
            $member->save();
            return redirect('mem');
        }
        function memberview()
        {
            $data=Member::all();
            return view('list',['datalist'=>$data]);
        }
        function delete($id)
        {
            $data=Member::find($id);
            $data->delete();
            return redirect('list');
        }

        function update_form_view($id)
        {
            $data=Member::find($id);
            return view('update_form',['datalist'=>$data]);
            
        }
       
        function update(Request $req)
        {
            $data=Member::find($req->id);
            $data->members_name=$req->member_name;
            $data->email=$req->email;
            $data->address=$req->address;
            $data->save();
            return redirect('list');
        }
        /* function update(Request $req,$id)
        {
            Member::where('id',$id)->update(array(
                'member_name'=>$req->member_name,
                'email'=>$req->email,
                'address'=>$req->address

            ));
            return redirect('list');
        }*/
}
