<?php
// Belajar Membuat Kalkulator Sederhana dengan php

//tampung inputan textfield ke dalam variabel
$angka1 = @$_POST['tangka1'];
$angka2 = @$_POST['tangka2'];
$hasil =  @$_POST['hasil'];

//uji jika tombol tambah diklik
if (isset($_POST['btambah'])) {
    $hasil = $angka1 + $angka2;
}

//uji jika tombol kurang diklik
if (isset($_POST['bkurang'])) {
    $hasil = $angka1 - $angka2;
}

//uji jika tombol bagi diklik
if (isset($_POST['bbagi'])) {
    $hasil = $angka1 / $angka2;
}

//uji jika tombol kali diklik
if (isset($_POST['bkali'])) {
    $hasil = $angka1 * $angka2;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Simple by Harits2505</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <br>
    <center>
        <h5>Kalkulator Simpel by Harits2505</h5>
    </center>
    <br>
    <center>
        <form method="post" class="bg-primary" style="width: 500px; height:300px; border-radius: 30px;">
            <table align="center" border="0" style="margin-top: 25px;">
                <br>
                <tr>
                    <td>Angka 1</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control form-control-user" style="width: 300px; margin-bottom: 5px;" name="tangka1" value="<?= $angka1 ?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>Angka 2</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control form-control-user" style="width: 300px; margin-bottom: 5px;" name="tangka2" value="<?= $angka2 ?>" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-warning" style="width: 52px; margin-right: 5px;" name="btambah" value="+">
                        <input type="submit" class="btn btn-warning" style="width: 52px; margin-right: 5px;" name="bkurang" value="-">
                        <input type="submit" class="btn btn-warning" style="width: 52px; margin-right: 5px;" name="bbagi" value="/">
                        <input type="submit" class="btn btn-warning" style="width: 52px; margin-right: 6px;" name="bkali" value="*">
                        <input type="submit" class="btn btn-danger" style="width: 52px;" name="bclear" value="C">
                    </td>
                </tr>
                <tr>
                    <td>Hasil</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control form-control-user" style="width: 300px; margin-top: 5px;"" name=" thasil" value="<?= $hasil ?>" autocomplete="off">
                    </td>
                </tr>
            </table>
            </div>
        </form>
    </center>


</body>

</html>
