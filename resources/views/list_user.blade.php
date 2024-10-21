@extends('layouts.app')

@section('content')
<style>
    
    body {
        font-family: Arial, sans-serif;
        background: url('/assets/css/img/WhatsApp Image 2024-09-27 at 22.19.23.jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    
    .table-container {
        margin-top: 50px; 
        margin-bottom: 50px; 
    }

    table {
        width: 80%; 
        margin: 20px auto; 
        border-collapse: collapse;
        font-family: 'Arial', sans-serif;
        font-size: 14px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white;
    }

    th, td {
        padding: 10px; 
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #6c757d;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    tr:hover {
        background-color: #f9f9f9;
        cursor: pointer;
    }

    td {
        color: #555;
    }

    
    .btn {
        padding: 6px 10px;
        font-size: 12px;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .btn-warning {
        background-color: #ffc107;
        color: white;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }


    .btn-add {
        padding: 10px 15px; 
        background-color: grey;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        transition: background-color 0.3s;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    .btn-add:hover {
        background-color: white;
        color: black;
    }

    .table-header {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        margin-bottom: 20px;
    }

    .btn-add {
        position: absolute;
        right: 0;
    }

    .table-title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        text-align: center;
    }

    /* Gaya untuk kolom gambar */
    .foto-column img {
        width: 80px; /* Mengurangi ukuran gambar */
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
    }

    /* Responsif untuk layar kecil */
    @media screen and (max-width: 768px) {
        table {
            font-size: 12px;
        }

        th, td {
            padding: 8px;
        }

        .btn-add {
            font-size: 12px;
            padding: 8px 12px;
        }

        .table-title {
            font-size: 18px;
        }

        .foto-column img {
            width: 70px;
            height: 70px;
        }
    }
</style>

<div class="table-container"> <!-- Bungkus tabel dalam div dengan class table-container -->
    <div class="table-header">
        <h2 class="table-title">List Data</h2>
        <a href="{{ route('user.create') }}" class="btn-add">Tambah User</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</td>
                    <td class="foto-column">
                        @if($user->foto)
                            <img src="{{ asset($user->foto) }}" alt="Foto Pengguna">
                        @else
                            <span>Foto tidak tersedia</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning">Detail</a>
                        
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
