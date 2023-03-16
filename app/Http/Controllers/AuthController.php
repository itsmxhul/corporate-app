<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }


    public function valid_register(Request $request){
        $request->validate([

            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'phone'         =>   'required',
            'password'     =>   'required|min:3'
        ]);
        $data = $request->all();

        $token = Str::random(64);



        User::create([
             'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'phone' => $data['phone'],

            'password' => Hash::make($data['password'])
        ]);


        return redirect('signin');
    }

    public function signin(){
        return view('signin');
    }

    Public function valid_login(Request $request){
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);
        $credentials = $request->only('email', 'password');

        // dd(Auth::attempt($credentials));

        if(Auth::attempt($credentials))
        {
            return redirect('index');
        } else
        {
            return redirect('sigin');
        }



    }
    public function logout() {
        session::flush();
        Auth::logout();
        return redirect('signin');
      }
}
