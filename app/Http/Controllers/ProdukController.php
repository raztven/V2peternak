<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function toko()
    {
        $produk = Produk::paginate(9); // lebih bagus pake paginate
        return view('pages/produk', compact('produk'));
    }

    function index()
    {
        $produk_toko = Produk::get();
        return view('admin/produktambah', compact('produk_toko'));
    }


    public function show($id)
    {
        $produk = Produk::findOrFail($id); // cari berdasarkan ID, atau tampilkan 404 jika tidak ketemu

        return view('pages/detailproduk', compact('produk'));
    }

    function tambah(Request $request)
    {

        $gambar = $request->file('gambar');
        $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('uploads'), $namaGambar);

        $produk = new Produk();
        $produk->gambar = $namaGambar;
        $produk->nama = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->deslong = $request->deslong;
        $produk->save();

        return redirect()->back();
    }

    function delete($produk)
    {
        $data = Produk::find($produk);
        if (!$data) {
            return "Data tidak kebaca,ID salah";
        }

        $filePath = public_path('uploads/' . $data['gambar']);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $data->delete();
        return redirect()->back();
    }

    function edit($produk)
    {
        $data = Produk::find($produk);
        if (!$data) {
            return "Data tidak ditemukan, id mu salah";
        }
        return view('admin/editproduk', compact('data'));
    }

    function update(Request $request, $produk)
    {

        $data = Produk::find($produk); // Mencari artikel dengan id
        $gambar = $request->file('gambar');
        if ($gambar) {
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $namaGambar);
        }

        if (!$data) { // jika tidak ditemukan
            return "Data tidak ditemukan, id mu salah";
        }
        $data->gambar = $namaGambar ?? $data['gambar'];
        $data->nama = $request->input('nama');
        $data->deskripsi = $request->input('deskripsi');
        $data->harga = $request->input('harga');
        $data->deslong   = $request->input('deslong');
        $data->save();
        return redirect('/dashboard');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $produk_toko = Produk::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%");
        })->get();

        return view('/produk', compact('produk_toko'));
    }
}
