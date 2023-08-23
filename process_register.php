<?php
require_once("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Proses validasi dan registrasi
    // ...

    // Setelah registrasi berhasil, arahkan kembali ke halaman login
    header("Location: login.php");
    exit();
}
?>
