<?php
// include 'config.php';
require_once "config.php";


$name = $_POST['name'];
$kerusakan = $_POST['kerusakan'];
$harga = $_POST['harga'];
$address = $_POST['address'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];


$query = mysqli_query($mysqli, "INSERT INTO personal ( name, kerusakan, harga, address, masuk, keluar) VALUES ('$name', '$kerusakan', '$harga', '$address', '$masuk', '$keluar')") or die(mysqli_error($con));
if ($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
