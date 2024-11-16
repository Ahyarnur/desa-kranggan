<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Berita::orderBy('created_at', 'desc')->paginate(4);

        
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
    public function berita(){
        $data = Berita::orderBy('created_at', 'desc')->get();

        return view('berita', compact('data'));
    }

    public function detail($id){
        $detail = Berita::find($id);
        return view('detail',compact('detail'));
    }

}
