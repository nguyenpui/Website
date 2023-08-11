<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // use RegistersUsers;

    protected $redirectTo = '/home'; // Đường dẫn sau khi đăng ký thành công

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            // 're-Enter password' => 'required|string|confirmed|min:8',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return back()->with('success', 'User registered successfully.');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->intended('home'); // Điều hướng đến trang chính sau khi đăng nhập
        } else {
            // Đăng nhập thất bại
            return back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    // Ghi đè phương thức showRegistrationForm để hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('front.auth.register');
    }
    public function registerPost()
{

    return view('front.index');
}
}
