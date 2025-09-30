<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    function index()
    {
        $berita = Berita::get();
        return view('admin/tambahberita', compact('berita'));
    }
    public function innews()
    {
        $berita = Berita::latest()->paginate(6); // tampilkan 6 berita per halaman
        return view('pages/news', compact('berita'));
    }
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        // ambil 5 berita terbaru (kecuali berita yang sedang dilihat)
        $latestBerita = Berita::where('id', '!=', $berita->id)
            ->latest()
            ->take(5)
            ->get();

        return view('pages.detailnews', compact('berita', 'latestBerita'));
        // atau view('pages.berita.show', ...) sesuai path view-mu
    }


    function tambah(Request $request)
    {

        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('uploads'), $namaGambar);

        $berita = new Berita();
        $berita->gambar = $namaGambar;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->kategori = $request->kategori;
        $berita->isi = $request->isi;
        $berita->save();

        return redirect()->back();
    }

    function delete($berita)
    {
        $data = Berita::find($berita);
        if (!$data) {
            return "Berita tidak ditemukan, ID salah";
        }

        $filePath = public_path('uploads/' . $data['gambar']);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $data->delete();
        return redirect()->back();
    }

    function edit($berita)
    {
        $data = Berita::find($berita);
        if (!$data) {
            return "Data tidak ditemukan, id mu salah";
        }
        return view('admin/editberita', compact('data'));
    }

    function update(Request $request, $berita)
    {

        $data = Berita::find($berita); // Mencari artikel dengan id
        $gambar = $request->file('gambar');
        if ($gambar) {
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $namaGambar);
        }

        if (!$data) { // jika tidak ditemukan
            return "Data tidak ditemukan, id mu salah";
        }
        $data->gambar = $namaGambar ?? $data['gambar'];
        $data->judul = $request->input('judul');
        $data->deskripsi = $request->input('deskripsi');
        $data->kategori = $request->input('kategori');
        $data->isi = $request->input('isi');
        $data->save();
        return redirect('/dashboard/berita');
    }
}
