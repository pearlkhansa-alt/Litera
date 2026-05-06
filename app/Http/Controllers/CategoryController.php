<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //menampilkan data
    public function index()
    {
        $categories = Categories::all();
        return view('admin.category.index', compact('categories'));
    }

    //menambahkan data kategori
    public function store(Request $request)
    {
        // dd($request->all());

        //validasi apakah data benar dan sesuai harapan
        $request->validate([
            'name' => 'required|string|max:225'
        ], [
            'name.required' => 'Nama kategori wajib diisi'
        ]);

        //proses menyimpan dalam database
        Categories::create([
            'id' => $request->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);


        return back()->with('success', 'kategori berhasil ditambahkan');
    }

    //update data
    public function update(Request $request, $id)
    {
        //validasi apakah data benar dan sesuai harapan
        $request->validate([
            'name' => 'required|string|max:225'
        ], [
            'name.required' => 'Nama kategori wajib diisi'
        ]);

        //pengecekan id, benar atau tidak
        $category = Categories::findOrFail($id);
        //perubahan dalam databese
        $category->update([
            'id' => $request->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);


        return back()->with('success', 'kategori berhasil diubah');
    }

    // Hapus kategori 
    public function destroy($id)
    {
        // cek data
        $category = Categories::findOrFail($id);
        // hapus data
        $category->delete();

        return back()->with('success', 'Kategori berhasil dihapus');
    }
}
