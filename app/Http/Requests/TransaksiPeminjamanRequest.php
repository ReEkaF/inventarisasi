<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiPeminjamanRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'peminjam_id' => 'required|exists:peminjams,id', 
            'buku_id' => 'required|exists:bukus,id', 
        ];
    }
    public function messages()
    {
        return [
            'peminjam_id.required' => 'Peminjam harus dipilih.',
            'peminjam_id.exists' => 'Peminjam yang dipilih tidak valid.',
            'buku_id.required' => 'Buku harus dipilih.',
            'buku_id.exists' => 'Buku yang dipilih tidak valid.',
        ];
    }
}
