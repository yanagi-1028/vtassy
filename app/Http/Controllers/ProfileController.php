<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
        return view('profile.create');
    }
    public function create(Request $request)
    {
       $this->validate($request, Profile::$rules);

      $profile = new Profile;
      $form = $request->all();
      unset($form['_token']);
      $profile->fill($form);
      $profile->save();
      
      return redirect('/profile');
    }
} 
