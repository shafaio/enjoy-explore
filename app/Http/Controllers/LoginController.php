<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class LoginController extends Controller
{
    public static function index(){
        return view('login/index' ,[
            "title" => "login"
        ]);
    }
    public static function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => ['required','email:dns'],
            'password' => ['required']
        ]);
        // $credentials = $request->validate([
        //     'email' => ['required', 'email:dns'],
        //     'password' => ['required'],
        // ]);
 
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        // $credentials = $request->only('email', 'pass');
        $credentials = $validator->validate();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/index');
        }else{

            return back()->with('ErrorLogin','Login Gagal!!!');
        }
        
    }
    public function logout(Request $request){
        
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
  
}
