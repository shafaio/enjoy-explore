<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public static function index(){
        return view('register/index',[
            "title" => "Register"
        ]);
    }
    public static function store(Request $request){
        // dd('a');
        $validator = Validator::make($request->all(),[
            'name' => ['required'],
            'username' =>['required','unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required'],
            'confirm_password' => ['required']
        ]);
        // $errors = $validator->errors();
        // echo($errors);
        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }
        $ValidateData = $validator->validate();
        // dd('a');
        // $user = new User([
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        // ]);
        // $user->save();

        // return redirect()->route('login')->with('success', 'Registration success. Please login!');
    
        if($ValidateData['password']===$ValidateData['confirm_password']){
            $ValidateData['password']= bcrypt($ValidateData['password']);
            $ValidateData['confirm_password']= bcrypt($ValidateData['confirm_password']);
            User::create($ValidateData);
            return redirect('/login')->with('success','Buat akun berhasil silahkan login');
        }else{
            return back()->with('error','Password konfirmasi salah!!!');
        }
    }
}
