<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function ProfileView()
    {
        $id=Auth::user()->id;
        $user=user::find($id);
        return view('backend.user.view_profile', compact('user'));
    }
    public function ProfileEdit()
    {
        $id=Auth::user()->id;
        $editData=user::find($id);
        return view('backend.user.edit_profile', compact('editData'));
    }
    public function ProfileStore(request $request)
    {
        $data=user::find(auth::user()->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->gender=$request->gender;
        $data->address=$request->address;
        if ($request->file('image')) {
            $file=$request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image']=$filename;
        }
        $data->save();
        $notification=([
            'message'=>'profile updated successfuly',
            'alert-type'=>'success'
        ]);
        return redirect()->route('profile.view')->with($notification);
    }
    public function PasswordView()
    {
        return view('backend.user.edit_password');
    }
    public function PasswordUpdate(request $request)
    {
        $validatedData=$request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed',
          ]);
        $hashedpassword=auth::user()->password;
        if (hash::check($request->oldpassword, $hashedpassword)) {
            $user=user::find(auth::id());
            $user->password=hash::make($request->password);
            $user->save();
            auth::logout();
            return redirect()->route('login');
        } else {
            return redirect()->back();
        }
    }
}
