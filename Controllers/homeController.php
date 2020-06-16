<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home');
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
}
