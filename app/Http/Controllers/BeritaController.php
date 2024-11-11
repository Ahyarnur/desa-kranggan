<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function createpost(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg'
        ]);


        $foto = $request->file('foto');
        $foto->storeAs('public', $foto->hashName());

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto->hashName()
            
        ]);
        
        return redirect()->route('index'); 
       
    }

    public function dashboard(){
        return view('dashboard');
    }
}
