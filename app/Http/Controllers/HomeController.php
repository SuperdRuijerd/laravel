<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;


class HomeController extends Controller
{
    public function home()
    {
        $data['title'] = 'Anasayfa';



        return view('home', $data);
    }

    public function about()
    {
        $data['title'] = 'Hakkımızda';



        return view('about', $data);
    }

    public function contact()
    {
        $data['title'] = 'İletişim';



        return view('contact', $data);
    }

    public function user_create()
    {
        $data['title'] = 'Kullanıcı Oluşturma';
        $data['users'] = DB::table('users')->get();

        return view('user_create', $data);
    }

    public function user_create_save(Request $request)
    {
        if($request->post())
        {
            $create = DB::table('users')->insert(
                [
                    'name' => $request->post('name'),
                    'email' => $request->post('email'),
                    'password' => Hash::make($request->post('password')),
                    'created_at' => date('Y-m-d h:i:s')
                ]
            );
        }

        return redirect()->route('user_create');
    }

    public function user_edit($id)
    {
        $data['title'] = 'Kullanıcı Düzenle';
        $data['user'] = DB::table('users')->where(['id' => $id])->first();

        return view('user_edit', $data);
    }

    public function user_edit_save(Request $request, $id)
    {
        if($request->post())
        {
            if($request->post('password') != '')
            {
                $update = DB::table('users')->where(['id' => $id])->update(
                    [
                        'name' => $request->post('name'),
                        'email' => $request->post('email'),
                        'password' => Hash::make($request->post('password')),
                        'updated_at' => date('Y-m-d h:i:s')
                    ]
                );
            }
            else
            {
                $update = DB::table('users')->where(['id' => $id])->update(
                    [
                        'name' => $request->post('name'),
                        'email' => $request->post('email'),
                        'updated_at' => date('Y-m-d h:i:s')
                    ]
                );
            }
            
        }

        return redirect()->route('user_create');
    }
}
