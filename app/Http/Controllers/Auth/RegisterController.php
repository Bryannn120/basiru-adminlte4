<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('back.pages.admin.auth.register');
    }

    public function registrasiHandler(Request $request)
    {
        // Lakukan validasi data input
        $validator = $this->validator($request->all());
        $validator->validate();

        // Buat pengguna baru jika validasi berhasil
        $user = $this->create($request->all());

        // Redirect ke halaman login atau halaman lain
        return redirect()->route('admin.login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:umkm,investor'], // Sesuaikan dengan role yang diperlukan
            'full_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:male,female'], // Sesuaikan dengan opsi gender yang diperlukan
            'alamat' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        // Simpan data pengguna baru ke dalam database
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'], // Sesuaikan dengan field yang digunakan di dalam tabel users
            'full_name' => $data['full_name'],
            'gender' => $data['gender'],
            'alamat' => $data['alamat'],
        ]);
    }
}
