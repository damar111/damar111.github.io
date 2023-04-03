<?php
require __DIR__ . './../../../app/connection.php';

if (isset($_POST['submit'])) {

    $nama_pemesan = $_POST['nama_pemesan'];
    $jk = $_POST['jk'];
    $nik = $_POST['nik'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $tgl_pesan = date(
        "Y-m-d",
        strtotime($_POST['tgl_pesan'])
    );

    // untuk convert string ke char menggunakan explode
    $date_string = explode('/', $_POST['tgl_pesan']);
    $format_date = $date_string[2] . '-' . $date_string[1] . '-' . $date_string[0];
    $tgl_pesanan = $format_date;
    $durasi_menginap = $_POST['durasi_menginap'];
    $breakfast = $_POST['breakfast'];
    $total = $_POST['total_bayar'];

    if ($breakfast != "true") {
        $breakfast = false;
    } else {
        $breakfast = true;
    }

    $formatharga = str_replace('.', '', $harga);
    $formattotal = str_replace('.', '', $total);
    // var_dump($_POST);
    // die;

    $query = "INSERT INTO pemesanan
        (nama_pemesan, jk, nik, tipe_kamar, harga, tgl_pesan, durasi_menginap, breakfast, total_bayar)
        VALUES ('$nama_pemesan','$jk','$nik','$tipe','$formatharga','$tgl_pesanan','$durasi_menginap',
        '$breakfast','$formattotal')";

    mysqli_query($connect, $query);

    header("Location: http://localhost/bnsp_hotel/");
    exit();
}
