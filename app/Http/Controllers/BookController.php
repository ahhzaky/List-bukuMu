<?php

namespace App\Http\Controllers;

use App\Models\Books;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view("app.my-favorite", compact('books'));
    }

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

        //$request->image->store('product', 'public');
        $path = $request->file('image')->store('product', 'public');

        $books = Books::create([
            'judul'     => $request->judul,
            'nama_pengarang' => $request->nama_pengarang,
            'deskripsi'   => $request->deskripsi,
            'bintang'   => $request->bintang,
            'image' =>  $path,
        ]);

        // save db
        $books->save();

        return redirect('/')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Books $books)
    {
        return view('app.edit-list', compact('books'));
    }

    public function update(Request $request, Books $books)
    {
        $request->validate([
            'judul' => 'required',
            'nama_pengarang' => 'required',
            'deskripsi' => 'required',
            'bintang' => 'required',
            'image' => 'required',
        ]);
        $path = $request->file('image')->store('product', 'public');

        Books::where('id', $books->id)
            ->update([
                'judul' => $request->judul,
                'nama_pengarang' => $request->nama_pengarang,
                'deskripsi' => $request->deskripsi,
                'bintang' => $request->bintang,
                'image' =>  $path,
            ]);
        return redirect('/my-favorite')->with('status', 'Data mahasiswa berhasil diubah');
    }


    public function destroy(Books $books)
    {
        Books::destroy($books->id);
        return redirect('/my-favorite')->with('status', 'Data mahasiswa berhasil dihapus');
    }
}
