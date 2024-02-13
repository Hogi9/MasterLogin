<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email-username','password');
        $validator = Validator::make($credentials,[
            'email-username' => 'required|max:100',
            'password' => 'required|min:8',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }

        // validator is email or username
        $validator = Validator::make(['email-username' => $credentials['email-username']], [
            'email-username' => 'required|email',
        ]);

        if($validator->fails()){
            if(Auth::attempt(['username' => $credentials['email-username'],'password' => $credentials['password']],$request->filled('remember'))){
                return redirect('/dashboard')->with('success', 'Login successful!'); 
            }
        }else{
            if(Auth::attempt(['email' => $credentials['email-username'],'password' => $credentials['password']],$request->filled('remember'))){
                return redirect('/dashboard')->with('success', 'Login successful!'); 
            }
        }
    }

    public function register()
    {
        return view('register');
    }

    public function registerLogic(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required|max:100|unique:users,username',
            'email' => 'required|email|unique:users,email|max:100',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }

        $input = $request->all();
        unset($input['confirm_password']);
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        return redirect('/login')->with('success','Registrasi Berhasil !');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
