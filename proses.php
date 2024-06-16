<?php
include "koneksi.php";

if (isset($_POST["proses"])) {
    $nama_mhs = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $id = $_POST['npm'];
    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mhs, prodi, id) VALUES ('$nama_mhs', '$prodi', '$id')") or die(mysqli_error($koneksi));
    $huruf_mutu = '';

    if ($proses) {
        echo "<script>alert('data berhasil ditambahkan')</script>";
    } else {
        echo "<script>alert('data gagal ditambahkan')</script>";
    }

}
?>