<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // use AuthenticatesUsers;

    protected $redirectTo = '/home'; // Đường dẫn sau khi đăng nhập thành công

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Ghi đè phương thức showLoginForm để hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('front.auth.login');
    }
//     public function login(Request $request)
// {
    
//     return view('front.index');
// }
public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
?>
