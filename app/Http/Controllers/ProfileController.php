<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = ""){
        $data = [
            'nama' => 'Meita Ayu Sabna Damayanti',
            'kelas' => 'D',
            'npm' => '2257051014'
        ];
        return view('profile', $data);
    }
}