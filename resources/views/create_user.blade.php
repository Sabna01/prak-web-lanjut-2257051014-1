<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>

    <!-- Style untuk halaman create user -->
    <style>
    body {
        font-family: 'Arial', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-image: url('/images/WhatsApp Image 2024-09-19 at 21.31.05.jpeg'); /* Ganti dengan path gambar yang sesuai */
        background-size: cover; /* Menyesuaikan ukuran gambar dengan elemen */
        background-position: center; /* Menempatkan gambar di tengah */
        background-repeat: no-repeat; /* Menghindari pengulangan gambar */
        filter: brightness(70%); /* Menggelapkan gambar jika diperlukan */
    }

    .form-container {
        background-color: rgba(0, 39, 43, 0.8); /* Warna kotak dengan transparansi */
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        color: #fff;
        width: 300px;
        margin-bottom: 30px;
    }

    .form-container h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form-group {
        margin: 10px 0;
    }

    .form-group label {
        display: block;
        color: #fff;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-group button {
        padding: 10px 20px;
        background-color: #e0ff4f;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        color: #333;
    }

    .form-group button:hover {
        background-color: #d4e845;
    }

    .table-container {
        background-color: rgba(255, 255, 255, 0.8); /* Transparansi background tabel */
        padding: 20px;
        border-radius: 10px;
        width: 400px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #333;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #00272b;
        color: white;
    }

    td {
        background-color: #e0ff4f;
        color: #333;
    }
    </style>

</head>
<body>
    <div class="form-container">
        <h1>Create User</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>