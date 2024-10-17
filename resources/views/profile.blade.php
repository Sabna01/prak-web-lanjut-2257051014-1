<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: grey; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative; /* Agar tombol kembali dapat diposisikan */
        }

        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-container:hover {
            transform: scale(1.08);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .profile-image img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
        }

        .profile-image img:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .profile-details {
            margin-top: 25px;
        }

        .profile-info {
            background-color: grey;
            padding: 12px;
            margin: 12px 0;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-info:first-child,
        .profile-info:nth-child(2),
        .profile-info:last-child {
            color: white;
        }

        .profile-info:hover {
            background-color: #b2ebf2;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Gaya untuk tombol kembali */
        .btn-back {
            position: absolute; /* Agar tombol bisa diposisikan relatif terhadap body */
            top: 20px;
            left: 20px;
            background-color: black; /* Warna tombol */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Menghilangkan garis bawah */
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #004d40; /* Efek hover */
        }
    </style>
</head>
<body>
    <!-- Tombol Kembali -->
    <a href="{{ route('users.index') }}" class="btn-back">Kembali Ke List Data</a>

    <div class="profile-container">
        <div class="profile-image">
            <img src="{{ asset($user->foto ?? 'assets/img/default-foto.jpg') }}" alt="Profile Image">
        </div>

        <div class="profile-details">
            <div class="profile-info">Nama: {{ $user->nama }}</div>
            <div class="profile-info">Kelas: {{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
            <div class="profile-info">NPM: {{ $user->npm }}</div>
        </div>
    </div>
</body>
</html>
