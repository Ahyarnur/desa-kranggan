<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Berita::all();
        return view('index', compact('data'));
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
