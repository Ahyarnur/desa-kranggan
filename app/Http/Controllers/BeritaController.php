<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function createpost(Request $request){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg'
        ]);


        $foto = $request->file('foto');
        $lokasi = Storage::disk('public')->putFile('berita', $foto);
        

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $lokasi,
            
            'user_id' => Auth::id()
        ]);
        
        return redirect()->route('index'); 
       
    }

    public function dashboard(){
        $detail = Berita::all();
        return view('dashboard', compact('detail'));
    }
}
