<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Statis;
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
        
        return redirect()->back(); 
       
    }

    public function dashboard(){
        $detail = Berita::all();
        return view('dashboard', compact('detail'));
    }
    public function kelola(){
        $detail = Berita::all();
        return view('kelola', compact('detail'));
    }

    public function delete($id)
    {
        $news = Berita::find($id);

        $news->delete();

        return redirect()->back();
    }

    public function edit($id){
        $edit = Berita::find($id);
        return view('edit',compact('edit'));
    }

    public function update(Request $request, $id){
        $product = Berita::find($id);
        $product->judul = $request->judul;
        $product->deskripsi = $request->deskripsi;

        if ($request->file('foto')) {

            Storage::disk('local')->delete('public/'.$product->foto);
            $foto = $request->file('foto');
            $foto->storeAs('public', $foto->hashName());
            $product->foto = $foto->hashName();
        }
        

        $product->save();
        return redirect()->route('dashboard');

    }
    public function datasta(){
        $statis = Statis::all();
        return view('datasta', compact('statis'));
    }

    public function updatesta(Request $request)
    {
    
        // Validasi input
        $request->validate([
            'kategori' => 'required',
            'jumlah' => 'required',
        ]);
    $edit = Statis::find($request->kategori);

    // Update data statistik
    $edit->jumlah = $request->jumlah;
    $edit->save(); // Simpan perubahan ke database

    // Redirect kembali ke dashboard atau halaman statistik
    return redirect()->route('dashboard')->with('success', 'Statistik berhasil diperbarui');
}

public function getDataStatistik()
{
    $statis = Statis::all(); // Ambil semua data statistik
    return response()->json($statis); // Kirim data dalam format JSON
}


}
