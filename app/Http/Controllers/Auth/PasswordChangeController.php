<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;

class PasswordChangeController extends Controller
{
    public function firstTmiemPasswordRequest(){
   
        return view('auth.passwords.first_timepass');
        }
        
        public function firstTmiemPasswordUpdate(Request $request){
      
            $request->validate([
                'password' => 'required|string|min:6|confirmed',
            ]);  
        
            $user = Auth::user();

            // Update the password and set the flag to false
            $user->password = Hash::make($request->password);
            $user->status = 'active';
            $user->save();
        
            // Re-login the user
            Auth::guard()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            Auth::guard()->login($user);
        
            return redirect()->route('portal')->with('success', 'Password changed successfully.');
        }
}
