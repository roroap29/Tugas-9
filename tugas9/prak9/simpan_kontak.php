<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.inc.php";

//ambil data dari form di kontak.php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $pesan = $_POST['pesan'];

    //query insert data formulir ke dalam database
    $sql = "INSERT db_kontak set nama='$nama', jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
    $query = mysqli_query($conn, $sql);

    //mengecek apakah query berhasil di insert
    if ($query) {
        //jika berhasil maka akan dialihkan ke halaman cetak.php
        header('location: cetak.php');
    } else {
        //jika gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}