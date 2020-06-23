<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home');
    }
        public function createUser(){
        return view('createuser');
    }
    public function getcreateUser(Request $request){
        $request->validate([
            'hoten' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'thanhpho' => 'required'
        ]);
        $data = array(
            'hoten' => $request->hoten,
            'user' => $request->username,
            'pass' => bcrypt($request->password),
            'lienhe' => $request->email,
            'thanhpho' => $request->thanhpho,
        );
        tbluser::create($data);
        return redirect('/');
    }
    public function about(){
        return view('about');
    }
    public function chat(){
        return view('chat');
    }
    public function ibuy(){
        return view('ibuy');
    }
    public function post(){
        return view('dangtin');
    }
}
