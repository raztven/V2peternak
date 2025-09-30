<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Contact;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function incontact()
    {
        $contact = Contact::latest()->get();
        return view('admin/contact', compact('contact'));
    }

    function innews()
    {
        $berita = Berita::latest()->get();
        return view('admin/berita', compact('berita'));
    }

    function indas()
    {
        $produk = Produk::latest()->get();
        return view('admin/produkdas', compact('produk'));
    }

    function indes()
    {
        return view('admin/dashboard');
    }

    public function index()
    {
        // Hitung total data
        $totalUsers   = User::count();
        $totalProduk  = Produk::count();
        $totalBerita  = Berita::count();
        $totalContact = Contact::count();

        // Ambil data terbaru (misal 5 terakhir)
        $latestContacts = Contact::latest()->take(5)->get();
        $latestBerita   = Berita::latest()->take(5)->get();
        $latestProduk   = Produk::latest()->take(6)->get();
        $latestUsers    = User::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalProduk',
            'totalBerita',
            'totalContact',
            'latestContacts',
            'latestBerita',
            'latestProduk',
            'latestUsers'
        ));
    }
}
