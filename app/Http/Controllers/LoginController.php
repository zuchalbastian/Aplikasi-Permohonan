<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }
    public function authentication(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);

        $credentials = $request->only('nip', 'password');
        if (Auth::attempt($credentials)) {
            // dd(Auth::user()->role_id);
            return redirect('/permohonan');
        }
        else {
            return redirect('auth/login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('auth/login');
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
