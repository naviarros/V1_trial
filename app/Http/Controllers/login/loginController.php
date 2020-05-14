<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function student(){
        return view('login.studentportal');
    }

    public function faculty()
    {
        return view('login.faculty');
    }

    public function admin()
    {
        return view('login.admin');
    }
}
