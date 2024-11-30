<?php
include 'koneksi.php';

if (isset($_POST['save'])) {
    $nim_039 = $_POST['nim_039'];
    $nama_039 = $_POST['nama_039'];
    $kelas_039 = $_POST['kelas_039'];
    $jurusan_039 = $_POST['jurusan_039'];
    $email_039 = $_POST['email_039'];
    $nomor_039 = $_POST['nomor_039'];

    $query = "INSERT INTO mahasiswa (NIM_039, Nama_039, Kelas_039, Jurusan_039, Email_039, Nomor_039) VALUES ( '$nim_039', '$nama_039', '$kelas_039', '$jurusan_039', '$email_039', '$nomor_039')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";

    } else {
        echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "');</script>";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MAHASISWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">TAMBAH DATA MAHASISWA</h1>
        <form action="post.php" method="POST">
            <div class="mb-3">
                <label for="id_039" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_039" name="id_039" required>
            </div>
            <div class="mb-3">
                <label for="nim_039" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim_039" name="nim_039" required>
            </div>
            <div class="mb-3">
                <label for="nama_039" class="form-label">NAMA</label>
                <input type="text" class="form-control" id="nama_039" name="nama_039" required>
            </div>
            <div class="mb-3">
                <label for="kelas_039" class="form-label">KELAS</label>
                <input type="text" class="form-control" id="kelas_039" name="kelas_039" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">JURUSAN</label>
                <input type="text" class="form-control" id="jurusan_039" name="jurusan_039" required>
            </div>
            <div class="mb-3">
                <label for="email_039" class="form-label">EMAIL</label>
                <input type="text" class="form-control" id="email_039" name="email_039" required>
            </div>
            <div class="mb-3">
                <label for="nomor_039" class="form-label">NOMOR HANDPHONE</label>
                <input type="text" class="form-control" id="nomor_039" name="nomor_039" required>
            </div>
            <button type="submit" name="save" class="btn btn-primary">TAMBAH DATA</button>
            <a href="edit.php" class="btn-primary mb-3">EDIT DATA</a>
        </form>
    </div>
</body>
</html>