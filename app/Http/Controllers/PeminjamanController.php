<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $borrowings = Borrowing::all();
        $date = now(); 
        return view('peminjaman.index', compact('borrowings' ,'date'));
    }

    public function create()
    {
        $books = Book::all();
        return view('peminjaman.create', compact('books'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'books' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'jumlah_pinjam' => 'required'
        ]);

        $borrowing = new Borrowing;
        $borrowing->book_id = $request->books;
        $borrowing->user_id = auth()->user()->id;
        $borrowing->tgl_pinjam = $request->tgl_pinjam;
        $borrowing->tgl_kembali = $request->tgl_kembali;
        $borrowing->jumlah_pinjam = $request->jumlah_pinjam;
        
        $borrowing->save();

        return redirect()->route('peminjaman');
    }

    public function edit(Borrowing $borrowing)
    {
        $books = Book::all();
        return view('peminjaman.edit', compact('borrowing', 'books'));
    }

    public function update(Request $request, Borrowing $borrowing)
    {
        $borrowing->update($request->all());
        return redirect()->route('peminjaman.index');
    }

    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();
        return redirect()->route('peminjaman.index');
    }
}
