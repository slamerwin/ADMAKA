<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('loginpage.login');
    }

    //proses login
    public function prosesLogin(Request $request)
    {
        //validasi data kosong
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // panggil api via model
        $response = LoginModel::auth($data);
        // dd($response);
        if ($response['success']) {
            $request->session()->put("code", $request->username);
            $request->session()->flash('status', true);
            $request->session()->flash('message', 'Login Berhasil');
            return redirect('/login');
        } else {
            $request->session()->flash('status', false);
            $request->session()->flash('message', 'Username and Password not match');
            return redirect('/login');
        }
    }
}
