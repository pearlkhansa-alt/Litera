<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrowing;

class FrontController extends Controller
{
    public function index()
    {
        // get data book
        $books = Book::latest()->take(3)->get();
        return view('welcome', compact('books'));
    }

    public function allBooks()
    {
        $books = Book::latest()->get();
        return view('front.all-books', compact('books'));
    }

    public function detail($id)
    {
        $book = Book::findOrFail($id);
        return view('front.detail-book', compact('book'));
    }

    // CREATE DATA PEMINJAMAN
    public function borrow($id, Request $request)
    {
        // dd($request->all());

        // Data yang di ambil dari font input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'duration' => 'required|integer|in:3,7,14',
        ]);

        // data durasi di ubah kedalam jenis data integer
        $duration = (int) $request->input('duration');
        $borrowDate = now();
        $returnDate = now()->addDays($duration);
        $code = strtoupper(uniqid('BRW-'));


        // Cek stok buku
        $book = Book::findOrFail($id);
        if ($book->stock <= 0) {
            return redirect()->back()->with('error', 'Maaf, stok buku sudah habis ya besti.');
        }

        //simpan data buku
        Borrowing::create([
            'book_id' => $id,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'duration' => $duration,
            'borrow_date' => $borrowDate,
            'return_date' => $returnDate,
            'code' => $code,
            'status' => 'pending',

        ]);

        // Mengurangi stok buku
        $book->decrement('stock');
        return redirect()->route('detail-book',$book->id)->with([
            'borrow_success' => true,
            'borrow_code' => $code,
            'borrow_name' => $request->input('name'),
            'borrow_duration' => $duration,
            'borrow_return' => $returnDate->translatedFormat('j F Y'),
        ]);
    }

      public function borrowBook(Request $request, $id) 
      {
        $request->validate([
    'name' => 'required|string|max:255',
    'phone' => 'required|string|max:255',
    'duration' => 'required|integer|in:1,3,7',
    ], 
    [
    'name.required' => 'Nama harus diisi.',
    'phone.required' => 'Nomor Whatsapp harus diisi.',
    'duration.required' => 'Durasi pinjam harus diisi.',
    ]);

    
     }
}
