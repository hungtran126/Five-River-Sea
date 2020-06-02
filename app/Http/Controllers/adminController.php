<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view('admin/dashboard');
    }
    public function table(){
        return view('admin/tables');
    }
    public function page(){
        return view('admin/page');
    }
}
