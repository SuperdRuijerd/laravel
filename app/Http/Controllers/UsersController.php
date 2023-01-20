<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function insert(Request $request)
    {   
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('userslist');
    }

    public function edit($id)
    {
        $data['user_id'] = $id;
        $data['user'] = User::find($id);
        return view('users.edit', $data);
    }

    public function update(Request $request)
    {
        User::where('id', $request->user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('userslist');
    }

    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('userslist');
    }
}
