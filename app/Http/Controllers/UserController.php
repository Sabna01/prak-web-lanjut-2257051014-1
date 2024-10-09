<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method untuk menampilkan profil
    public function profile()
    {
        $data = [
            'nama' => 'Meita Ayu Sabna Damayanti',
            'kelas' => 'D',
            'npm' => '2257051014'
        ];
        return view('profile', $data);
    }

    // Method untuk menampilkan form create_user
    public function create()
    {
        return view('create_user');
    }

    // Method untuk menangani submit form dari create_user dan menampilkan view profile
    public function store(Request $request)
    {
        // Validasi data input dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|numeric',
            'kelas' => 'required|string|max:10',
        ]);

        // Ambil semua data dari form
        $data = $request->all();

        // Debug data menggunakan dd()
        dd($data);

        // Ambil data dari form
        $data = [
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas' => $request->input('kelas')
        ];

        // Kembalikan view profile dengan data yang di-submit dari form
        return view('profile', $data);
    }
}