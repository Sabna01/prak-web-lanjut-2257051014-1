<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Ubah font family ke Poppins */
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #FFCCCB; /* Ubah background ke light pink */
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 500px;
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
            font-size: 14px;
        }
        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        input:focus, select:focus {
            border-color: #FF69B4; /* Fokus warna menjadi pink */
            box-shadow: 0 0 5px rgba(255, 105, 180, 0.5);
            outline: none;
        }
        input:hover, select:hover {
            border-color: #FFB6C1; /* Hover border warna pink yang lebih muda */
            box-shadow: 0 0 8px rgba(255, 182, 193, 0.7); /* Tambah efek shadow hover */
        }
        button {
            background-color: #FF69B4; /* Warna tombol pink cerah */
            color: white;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif; /* Terapkan font family ke tombol */
        }
        button:hover {
            background-color: #FF1493; /* Ubah warna hover lebih cerah */
            transform: scale(1.1); /* Hover efek perbesaran */
            box-shadow: 0 6px 12px rgba(255, 20, 147, 0.6); /* Tambah efek shadow hover */
        }
        button:active {
            transform: scale(1); /* Efek animasi ketika tombol diklik */
        }
        /* Responsive Design */
        @media (max-width: 500px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            input, select, button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Create User</h1>
    <form action="/user/store" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required>

        <label for="kelas_id">Kelas:</label>
        <select id="kelas_id" name="kelas_id" required>
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>