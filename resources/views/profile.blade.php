<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #FFCCCB; /* Background gradient pink */
        }
        .profile-container {
            background-color: #ffafcc; /* Warna hijau tua lebih lembut */
            padding: 30px;
            border-radius: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); 
            width: 320px;
            text-align: center;
            transition: all 0.3s ease;
        }
        .profile-container:hover {
            transform: scale(1.05); /* Efek hover untuk container */
        }
        .profile-pic {
            margin-bottom: 20px;
            border-radius: 50%;
            border: 5px solid #FFCCCB; /* Border kuning lebih cerah */
            width: 160px;
            height: 160px;
            object-fit: cover;
            transition: all 0.3s ease;
        }
        .profile-pic:hover {
            transform: scale(1.1); /* Efek hover pada gambar profil */
        }
        .info-item {
            background-color: #FFC0CB; /* Background pink pastel lembut */
            color: #4b4b4b; /* Warna teks abu-abu gelap */
            margin: 10px 0;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 17px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambah bayangan lembut */
        }
        h1 {
            color: #ffffff; /* Teks putih */
            margin-bottom: 25px;
            font-size: 28px;
            font-weight: 700;
        }
        span {
            font-weight: 600;
            font-size: 16px;
        }
    </style>
</head>
<body>
<div class="profile-container">
    <h1>Profile User</h1>
    <div class="profile-info">
        <!-- Tampilkan gambar profil dari public/assets/img -->
        <img src="{{ asset('assets/img/Sabna.jpeg') }}" alt="Profile Picture" class="profile-pic">
        <!-- Info user -->
        <div class="info-item">Nama: {{ $nama }}</div>
        <div class="info-item">NPM: {{ $npm }}</div>
        <!-- Info user dengan kelas inline -->
        <div class="info-item">
            <span>Kelas:</span>
            <span>{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</span>
        </div>
    </div>
</div>
</body>
</html>