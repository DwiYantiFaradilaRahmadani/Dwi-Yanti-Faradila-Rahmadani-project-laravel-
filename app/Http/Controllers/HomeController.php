<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            return view('index'); // ini merujuk ke halaman welcome.blade.php
    }

    public function login(){
        return view('login'); // ini merujuk ke halaman login.blade.php
}



public function about(){
    $data = [
        'name'      =>'Dwi Yanti Faradila Rahmadani',
        'address'   =>'Banyumas',
        'email'     =>'yantifaradila30@gmail.com'
    ];
    return view('about', $data);

}

}
