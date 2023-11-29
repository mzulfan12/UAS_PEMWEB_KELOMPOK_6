<?php
require_once('koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

    mysqli_query($koneksi, "INSERT INTO db_user (username, password) VALUES ('$username','$password')");
    header("location: http://localhost/uaspemweb/login.html");