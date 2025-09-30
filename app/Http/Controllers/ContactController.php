<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index()
    {
        $contact = Contact::get();
        return view('pages/home', compact('contact'));
    }


    function tambah(Request $request)
    {

        $contact = new Contact();
        $contact->nama = $request->nama;
        $contact->email = $request->email;
        $contact->perusahaan = $request->perusahaan;
        $contact->pesan = $request->pesan;

        $contact->save();

        return redirect()->back();
    }
}
