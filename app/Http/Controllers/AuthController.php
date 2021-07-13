<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{

    public function register(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
            'username'  =>  'required|unique:users,username',
            'password'  =>  'required'
        ],[
            'name.required' =>  'نام الزامی است',
            'username.required' => 'نام کاربری الزامی است',
            'username.unique'   =>  'نام کاربری تکراری می باشد.',
            'password.required' =>  'رمزعبور ازامی است'
        ]);

        $credentials = $request->only([ 'name', 'username', 'password' ]);

        $user = User::create([
            'name'  =>  $credentials['name'],
            'username'  =>  $credentials['username'],
            'password'  =>  Hash::make($credentials['password'])
        ]);

        Auth::attempt([
            'username'  =>  $user->username,
            'password'  =>  $credentials['password']
        ]);
        return redirect()->back()->with('message', 'ثبت نام شما با موفقیت انجام شد.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message', 'شما با موفقیت خارج شدید.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username'  =>  'required',
            'password'  =>  'required'
        ],[
            'username.required' =>  'نام کاربری الزامی است',
            'password.required' =>  'رمزعبور الزامی است'
        ]);

        $credentials = $request->only([ 'username', 'password' ]);

        if ( Auth::attempt($credentials) ) {
            return redirect()->back()->with('message', 'شما با موفقیت وارد شدید.');
        }
        return redirect()->back()->with('message', 'اطلاعات وارد شده صحیح نمی باشد.');
    }
}