<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'first_name' => 'required|string|max:255',
                'last_name' => 'string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password',
                'phone' => 'required|string|max:20',
                'candidate_status' => 'required|string|max:255',
                'bank_name' => 'string|max:255',
                'bank_branch' => 'required|string|max:255',
                'bank_account_name' => 'required|string|max:255',
                'bank_account_number' => 'required|string|max:255',
                'ktp' => 'required|file|mimes:jpeg,png|max:2048', // Assuming KTP is an image file
                'npwp' => 'required|file|mimes:jpeg,png|max:2048', // Assuming NPWP is an image file
                'foto_close_up' => 'required|file|mimes:jpeg,png|max:2048', // Assuming Foto Close Up is an image file
                'is_admin' => 'boolean',
                'is_farmer' => 'boolean',
                'is_driver' => 'boolean',
                'is_pic_fabric' => 'boolean',
                'girik' => 'nullable|file|mimes:jpeg,png,pdf|max:2048', // Assuming Girik can be an image or PDF file
                'farmer_address' => 'nullable|string|max:255',
                'farmer_garden_address' => 'nullable|string|max:255',
                'sim_b1' => 'nullable|file|mimes:jpeg,png|max:2048', // Assuming SIM B1 is an image file
                'stnk' => 'nullable|file|mimes:jpeg,png|max:2048', // Assuming STNK is an image file
                'driver_address' => 'nullable|string|max:255',
                'pic_fabric_address' => 'nullable|string|max:255',
                'siup' => 'nullable|file|mimes:jpeg,png,pdf|max:2048', // Assuming SIUP can be an image or PDF file
                'npwp_fabric' => 'nullable|file|mimes:jpeg,png|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'Nama depan wajib diisi.',
            'first_name.string' => 'Nama depan harus berupa teks.',
            'first_name.max' => 'Nama depan tidak boleh lebih dari 255 karakter.',
            'last_name.string' => 'Nama belakang harus berupa teks.',
            'last_name.max' => 'Nama belakang tidak boleh lebih dari 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa alamat email yang valid.',
            'email.unique' => 'Email sudah digunakan sebelumnya.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus terdiri dari minimal 8 karakter.',
            'password_confirmation.required' => 'Konfirmasi kata sandi wajib diisi.',
            'password_confirmation.same' => 'Konfirmasi kata sandi harus sama dengan kata sandi.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.string' => 'Nomor telepon harus berupa teks.',
            'phone.max' => 'Nomor telepon tidak boleh lebih dari 20 karakter.',
            'candidate_status.required' => 'Status kandidat wajib diisi.',
            'candidate_status.string' => 'Status kandidat harus berupa teks.',
            'candidate_status.max' => 'Status kandidat tidak boleh lebih dari 255 karakter.',
            'bank_name.string' => 'Nama bank harus berupa teks.',
            'bank_name.max' => 'Nama bank tidak boleh lebih dari 255 karakter.',
            'bank_branch.required' => 'Cabang bank wajib diisi.',
            'bank_branch.string' => 'Cabang bank harus berupa teks.',
            'bank_branch.max' => 'Cabang bank tidak boleh lebih dari 255 karakter.',
            'bank_account_name.required' => 'Nama pemilik akun bank wajib diisi.',
            'bank_account_name.string' => 'Nama pemilik akun bank harus berupa teks.',
            'bank_account_name.max' => 'Nama pemilik akun bank tidak boleh lebih dari 255 karakter.',
            'bank_account_number.required' => 'Nomor akun bank wajib diisi.',
            'bank_account_number.string' => 'Nomor akun bank harus berupa teks.',
            'bank_account_number.max' => 'Nomor akun bank tidak boleh lebih dari 255 karakter.',
            'ktp.required' => 'KTP wajib diisi.',
            'ktp.file' => 'KTP harus berupa berkas.',
            'ktp.mimes' => 'KTP harus berupa berkas dengan tipe: jpeg.',
        ];
    }
}
