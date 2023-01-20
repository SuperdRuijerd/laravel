<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function list()
    {
        $data['users'] = User::all();
        
        return view('users.list', $data);
    }

    public function create()
    {   
        return view('users.create');
    }
}
