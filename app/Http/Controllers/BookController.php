<?php

namespace App\Http\Controllers;

use App\Models\Books;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create()
    {
        return view('app.create-list');
    }

    public function store(Request $request)
    {
        $books = new Books;

        $request->validate([
            'judul' => 'required',
            'nama_pengarang' => 'required',
            'deskripsi' => 'required',
            'bintang' => 'required',
            'image' => 'required',
        ]);

        $request->image->store('product', 'public');


        $books = Books::create([
            'judul'     => $request->judul,
            'nama_pengarang' => $request->nama_pengarang,
            'deskripsi'   => $request->deskripsi,
            'bintang'   => $request->bintang,
            'image' =>  $request->image->hashName(),
        ]);

        // save db
        $books->save();

        return redirect('/')->with('status', 'Data mahasiswa berhasil ditambah');
    }
}
