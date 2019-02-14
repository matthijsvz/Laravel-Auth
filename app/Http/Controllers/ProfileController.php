<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{


    public function showPasswordForm()
    {
      return view('profile.edit_password_form');
    }

   public function updatePassword(Request $request)
   {
      $data = $request->validate(
         [
            'new_password' => 'required|min:6|confirmed',
            'new_password_confirmation' => 'required|min:6'
         ]
      );

      $user = Auth::user();
      $user->password = Hash::make($data['new_password']);
      $user->save();

      Auth::logout();

      return redirect()->route('login');
   }
}

