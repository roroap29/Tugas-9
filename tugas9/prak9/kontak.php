<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=Mukta:wght@300&family=PT+Sans:ital@1&display=swap"
        rel="stylesheet">
    <style>
    h1 {
        color: whitesmoke;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="box-formulir">
        <h1>Daftar Kontak</h1>
        <form action="simpan_kontak.php" method="POST">
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jkel" class="input-control" value="Laki-Laki"> Laki-Laki
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jkel" class="input-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Email Pribadi</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" cols="22" rows="3" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="kota" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pesan</td>
                        <td>:</td>
                        <td>
                            <textarea name="pesan" cols="22" rows="5" class="input-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="simpan" class="btn-simpan" value="Simpan">
                        </td>
                    </tr>
                </table>
            </div>
    </div>
    </form>


</body>

</html>