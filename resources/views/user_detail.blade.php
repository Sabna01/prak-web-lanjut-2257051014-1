<!-- resources/views/user_detail.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Detail Pengguna</h2>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Nama:</strong> {{ $user->nama }}</p>
    <p><strong>NPM:</strong> {{ $user->npm }}</p>
    <p><strong>Kelas:</strong> {{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
@endsection
