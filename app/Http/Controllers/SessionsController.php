<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    /**
     * عرض صفحة إنشاء حساب
     */
    public function create()
    {
        return view('sessions.register');
    }

    /**
     * معالجة بيانات إنشاء حساب جديد
     */
    public function store()
    {
        $attribute = request()->validate([
            'name' => ['required', 'max:255', 'min:4'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required']
        ]);

        // تشفير كلمة المرور وتجهيز البيانات
        $attribute['password'] = bcrypt($attribute['password']);
        $attribute['username'] = ucwords($attribute['name']);
        
        // إنشاء المستخدم
        $user = User::create($attribute);

        Auth::login($user);
        session()->flash('success', 'Your account has been created');
        
        return redirect('/task');
    }

    public function createLogin()
    {
        return view('sessions.login');
    }

    public function login()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($attributes)) {
            session()->regenerate();
            
            return redirect('/task')->with('success', 'Welcome Back!');
        }
        return back()
            ->withInput()
            ->withErrors(['email' => 'البيانات المدخلة غير صحيحة، يرجى التحقق من البريد أو كلمة المرور']);
    }


    public function destroy()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login')->with('success', 'Goodbye');
    }
}
