<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView()
    {
        $data['alldata']=User::all();
        return view('backend.user.view_user', $data);
    }
    public function UserAdd()
    {
        return view('backend.user.add_user');
    }
    public function UserStore(request $request)
    {
        $validatedData=$request->validate([
          'email'=>'required|unique:Users',
          'name'=>'required'
        ]);
        $data=new user();
        $data->user_type=$request->user_type;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->save();

        $notification=([
            'message'=>'user added successfuly',
            'alert-type'=>'success'
        ]);
        return redirect()->route('user.view')->with($notification);
    }
    public function UserEdit($id)
    {
        $editData=user::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }
    public function UserUpdate(request $request, $id)
    {
        $data=user::find($id);
        $data->user_type=$request->user_type;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();

        $notification=([
            'message'=>'user updated successfuly',
            'alert-type'=>'success'
        ]);
        return redirect()->route('user.view')->with($notification);
    }
    public function UserDelete($id)
    {
        $user=user::find($id);
        $user->delete();

        $notification=([
            'message'=>'user deleted successfuly',
            'alert-type'=>'success'
        ]);
        return redirect()->route('user.view')->with($notification);
    }
}
