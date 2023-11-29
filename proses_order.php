<?php
require_once('koneksi.php');

$nama = $_POST['nama'];
$email = ($_POST['email']);
$no_telepon = ($_POST['no_telepon']);
$jumlah = ($_POST['jumlah']);
$pesanan = ($_POST['pesanan']);
$alamat = ($_POST['alamat']);

    mysqli_query($koneksi, "INSERT INTO orderan (nama, email, no_telepon, jumlah, pesanan, alamat) VALUES ('$nama','$email', '$no_telepon', '$jumlah', '$pesanan', '$alamat')");
    header("location: http://localhost/uaspemweb/order.html");