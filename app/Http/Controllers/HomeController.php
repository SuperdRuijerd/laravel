<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;


class HomeController extends Controller
{
    public function dashboard()
    {
        return view('layouts.home.dashboard');
    }

}
