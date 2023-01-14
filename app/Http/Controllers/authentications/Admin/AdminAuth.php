<?php

namespace App\Http\Controllers\Authentications\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class AdminAuth extends Controller
{
    public function get_login()
    {
        $pageConfigs = ['myLayout' => 'blank'];
        return view('content.authentications.admin.login', ['pageConfigs' => $pageConfigs]);
    }

    public function post_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('admin')->attempt(
            [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]
        )) {
            $user = auth()->guard('admin')->user();
            if ($user->is_admin === 1) {
                return redirect()->route('admin-home')->with('Login Berhasil');
            } else {
                return back()->with('login gagal');
            }
        }
    }

    public function admin_logout(Request $request)
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success, berhasil logout');
        return redirect()->route('admin-login');
    }
}
