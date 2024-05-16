<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('v_user');
    }
}