<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required|integer',
            'stock' => 'required|integer',
            'cover' => 'image|mimes:jpeg,png,jpg,|max:2048',
            'description' => 'required',
        ];
    }

    // Public function message
    public function messages(): array
    {
        return [
            'category_id.required' => 'Kategori wajib di pilih',
            'title.required' => 'Judul wajib di isi',
            'author.required' => 'Penulis wajib di isi',
            'publisher.required' => 'Penerbit wajib di isi',
            'year.required' => 'Tahun wajib isi',
            'year.integer' => 'Tahun harus berupa angka',
            'stock.required' => 'Stok wajib di isi',
            'stock.integer' => 'Stok harus berupa angka',
            'cover.image' => 'File harus berupa gambar',
            'cover.mimes' => 'File harus berupa jpeg, png, jpg',
            'cover.max' => 'Ukuran file maksimal 2MB',
            'description.required' => 'Deskripsi wajib di isi',
        ];
    }
}
