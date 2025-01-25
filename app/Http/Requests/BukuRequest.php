<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nama_buku' => 'required|string|max:255',
            'jenis_buku_id' => 'required',
            'stok' => 'required|integer|min:1|max:999',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama_buku.required' => 'Nama buku wajib diisi.',
            'nama_buku.string' => 'Nama buku harus berupa teks.',
            'nama_buku.max' => 'Nama buku tidak boleh lebih dari 255 karakter.',
            'jenis_buku.required' => 'Jenis buku harus dipilih.',
            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka.',
            'stok.min' => 'Stok tidak boleh kurang dari 1.',
            'stok.max' => 'Stok tidak boleh lebih dari 999.',
        ];
    }
}
