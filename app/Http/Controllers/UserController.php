<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        dd('user listing page');
    }

    public function login()
    {
        dd('admin login page');
    }
}
