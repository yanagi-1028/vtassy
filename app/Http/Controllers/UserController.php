<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getsignin()
    {
        return view('user.signin');
    }
    public function postsignin(Request $request)
    {
        $this->validate($request,[
        'mailaddress' => 'mailaddress|required',
        'password' => 'required'
            ]);
        if(Auth::attempt(['mailaddress' => $request->input('mailaddress'),
        'password' => $request->input('password')])){
            return redirect()->route('user.success');
        }
            return redirect()->back();
    }
}
