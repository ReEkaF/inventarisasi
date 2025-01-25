<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeminjamRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nama' => 'required|string|max:255', 
            'KTP' => 'required|numeric|digits_between:16,20',
            'alamat' => 'required|string|max:255', 
            'umur' => 'required|numeric|min:18|max:150', 
            'WA' => 'required|numeric|digits_between:10,15', 
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Nama harus diisi.',
            'KTP.required' => 'No KTP harus diisi.',
            'KTP.numeric' => 'No KTP harus berupa angka.',
            'KTP.digits_between' => 'No KTP harus terdiri dari 16 sampai 20 digit.',
            'alamat.required' => 'Alamat harus diisi.',
            'umur.required' => 'Umur harus diisi.',
            'umur.numeric' => 'Umur harus berupa angka.',
            'umur.min' => 'Umur minimal 18 tahun.',
            'umur.max' => 'Umur maksimal 150 tahun.',
            'WA.required' => 'No WA harus diisi.',
            'WA.numeric' => 'No WA harus berupa angka.',
            'WA.digits_between' => 'No WA harus terdiri dari 10 sampai 15 digit.',
        ];
    }
}
