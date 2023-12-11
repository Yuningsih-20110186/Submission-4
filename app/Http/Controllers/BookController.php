<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $buku = Book::all();

        $search = $request->input('search');
        $buku = Book::when($search, function ($query) use ($search) {
        return $query->where('judul', 'like', '%' . $search . '%');
    })->get();
        return view('books.index', compact('buku'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id',
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Buku Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $buku = Book::find($id);
        if (!$buku) {}
        return view('books.show', ['buku' => $buku]);
    }

    public function edit($id)
    {
        $buku = Book::find($id);
        return view('books.edit', ['buku' => $buku]);
    }

    public function update(Request $request, $id)
    {
        $buku = Book::findOrFail($id);
        $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900',
        ]);

        $buku->update($request->all());

        return redirect()->route('books.index')->with('success', 'Buku Berhasil Diperbarui');
    }

    public function delete($id)
    {
        $buku = Book::find($id);
        $buku->delete();

        return redirect()->route('books.index')->with('success', 'Buku Berhasil Dihapus');
    }
}
