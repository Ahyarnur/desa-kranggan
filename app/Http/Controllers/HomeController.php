<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function statistik(){
        return view('statistik');
    }
    public function pemerintah(){
        return view('pemerintah');
    }
    public function layanan(){
        return view('layanan');
    }
}
