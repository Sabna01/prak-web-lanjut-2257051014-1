<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url('/images/WhatsApp Image 2024-09-19 at 21.31.05.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: brightness(70%);
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); 
            padding: 70px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 300px;
            text-align: center;
        }
        h1 {
            color: #333;
            font-size: 28px;
            font-weight: 800;
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
            text-align: left;
            width: 100%;
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
            border-color: #FF69B4;
            box-shadow: 0 0 5px rgba(255, 105, 180, 0.5);
            outline: none;
        }
        input:hover, select:hover {
            border-color: #FFB6C1;
            box-shadow: 0 0 8px rgba(255, 182, 193, 0.7);
        }
        button {
            background-color: #FF1493;
            color: white;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #FF69B4;
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(255, 105, 180, 0.5);
        }
        button:active {
            transform: scale(1);
        }
        
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
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" required>

            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" required>

            <label for="semester">Semester:</label>
            <input type="text" id="semester" name="semester" required>

            <label for="kelas_id">Kelas:</label>
            <select id="kelas_id" name="kelas_id" required>
                <option value="" disabled selected>Pilih Kelas</option>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" value="{{ old('foto') }}" class="@error('foto') input-invalid @enderror">
            @error('foto')
                <div class="pesan-error">{{ $message }}</div>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>