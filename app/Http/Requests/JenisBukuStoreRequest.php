<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JenisBukuStoreRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_jenis_buku' => 'required|string|max:255|' ,

        ];
    }
    public function messages()
    {
        return [
            'nama_jenis_buku.required' => 'Nama jenis buku wajib diisi.',
            'nama_jenis_buku.string' => 'Nama jenis buku harus berupa teks.',
            'nama_jenis_buku.max' => 'Nama jenis buku tidak boleh lebih dari 255 karakter.',

        ];
    }
}
