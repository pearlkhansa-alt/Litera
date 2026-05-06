<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->latest()->get();
        return view('admin.book.index', compact('books'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('admin.book.create', compact('categories'));
    }

    public function upload(BookRequest $request)
    {
        //    dd($request->all());
        // Data Cover berupa img
        $coverPath = null;
        // cek apakah ada file cover yang diupload
        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('cover', 'public');
        }

        Book::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'stock' => $request->stock,
            'cover' => $coverPath,
            'description' => $request->description,
        ]);

        return Redirect(route('admin.book.index'))->with('success', 'Buku berhasil ditambahkan');
    }

    public function detail($id)
    {
        $book = Book::with('category')->findOrFail($id);
        return view('admin.book.detail', compact('book'));
    }

    public function edit($id)
    {
        $categories = Categories::all();
        $book = Book::with('category')->findOrFail($id);
        return view('admin.book.edit', compact('categories', 'book'));
    }

    public function update(BookRequest $request, $id)
    {
        $book = Book::findOrFail($id);

        // Handle cover update
        if ($request->hasFile('cover')) {
            // Menghapus cover yang lama jika ada
            if ($book->cover && Storage::disk('public')->exists($book->cover)) {
                Storage::disk('public')->delete($book->cover);
            }

            // Menyimpan cover baru
            $coverPath = $request->file('cover')->store('cover', 'public');
        } else {
            $coverPath = $book->cover; // Jika tidak ada file baru, tetap gunakan cover lama
        }

        // Update data buku 
        $book->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'stock' => $request->stock,
            'cover' => $coverPath,
            'description' => $request->description,
        ]);

        return Redirect(route('admin.book.index'))->with('success', 'Buku berhasil diupdate');
    }

    public function destroy($id)
    {
    //    cek data
    $book = Book::findOrFail($id);
    //    cek apakah cover ada
    $book->delete();
    return back()->with('success', 'Buku berhasil dihapus');
    }
}
