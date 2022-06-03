<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "koneksi.php";
if (isset($_POST['email']) && isset($_POST['pass'])) {

    function validate($data)
    {
        $data = trim($data); //menghapus karakter atau spasi pada string
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); //mengkonversi karakter tertentu menjadi karakter html
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);

    if (empty($email)) {
        header("Location: index.php?error=Email tidak boleh kosong");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password tidak boleh kosong");
        exit();
    } else {
        //ambil data dari form-login.php
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            //query insert data formulir ke dalam database
            $sql = "INSERT login set email='$email', pass='$pass'";
            $query = mysqli_query($conn, $sql);

            //mengecek apakah query berhasil di insert
            if ($query) {
                //jika berhasil maka akan dialihkan ke halaman cetak.php
                header('location: cetak-login.php');
            } else {
                //jika gagal tampilkan pesan
                die("Gagal menyimpan perubahan...");
            }
        } else {
            die("Akses dilarang...");
        }
    }
} else {
    header("Location: form-login.php");
    exit();
}