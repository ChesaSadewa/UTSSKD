<?php
include 'koneksi.php';
include 'caesar.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_salt = $password . $username ;
$password_md5 = md5($password_salt);

$passkey = substr($password, 2);
$key = ((strlen($password)) + (strlen($username)) - 3);
$text=$username;
$enkripuser = encrypt($text, $key);

$data = mysqli_query($conn, "SELECT * FROM siswa WHERE username='$enkripuser' and password='$password_md5'");
if($data->num_rows>0){
    $aNamel = mysqli_fetch_assoc($data);

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    $uname = $aNamel['fullname'];

    header("Location:dashboard.php");
} else{
    echo"login gagal";
}



