<?php
$admin_user = "admin";
$admin_pass = "12345";

$siswa_user = "siswa";
$siswa_pass = "1111";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $admin_user) {
    if ($password === $admin_pass) {
        echo "Login berhasil sebagai Admin";
    } else {
        echo "Password salah";
    }
} elseif ($username === $siswa_user) {
    if ($password === $siswa_pass) {
        echo "Login berhasil sebagai Siswa";
    } else {
        echo "Password salah";
    }
} else {
    echo "Username tidak ditemukan";
}
?>
