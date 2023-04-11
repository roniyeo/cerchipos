<?php
session_start();

include 'config.php';
$username = $_POST['username'];
$password = MD5($_POST['password']);

$check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password = '$password'");
$result = mysqli_num_rows($check);

if ($result > 0) {
    $data = mysqli_fetch_assoc($check);
    $_SESSION['uuid'] = $data['uuid'];
    $_SESSION['fullname'] = $data['fullname'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['nohp'] = $data['nohp'];
    $_SESSION['level'] = $data['level'];
    header("location:../index.php");
}else{
    header("location:../login.php?pesan=gagal");
}
