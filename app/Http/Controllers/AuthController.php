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
      
    }
}