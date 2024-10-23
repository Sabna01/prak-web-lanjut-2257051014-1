<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'universitas';

$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];

// Proses upload foto
$foto = $_FILES['foto']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($foto);
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

// SQL untuk menambahkan data ke tabel
$sql = "INSERT INTO mahasiswa (nama, npm, kelas, jurusan, semester, foto) 
        VALUES ('$nama', '$npm', '$kelas', '$jurusan', '$semester', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
