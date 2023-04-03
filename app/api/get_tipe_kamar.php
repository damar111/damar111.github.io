<?php
require_once '../connection.php';
$data = $_POST;
$tipe = $data['tipe'];

$result = $connect->query("SELECT * FROM kategori WHERE kategori = '$tipe'");

$row = mysqli_fetch_assoc($result);

$harga = $row['harga'];

echo json_encode($harga);

// echo json_encode($total_bayar);

// $format['total_format'] = 'Rp. ' . number_format($total_bayar, 2, ',');
// $format['total'] = (int) $total_bayar;

// echo json_encode($format);
