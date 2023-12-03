<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5( $_POST['password']);
$id = 1;


include('../koneksi.php');

$username_data = mysqli_query($koneksi," SELECT*FROM `user` WHERE `username` = '".$username."'");
// var_dump($username_data);
$username_count = mysqli_num_rows($username_data);


if($username_count > 0){
    echo "username sudah terdaftar";
}else{
    $email_data = mysqli_query($koneksi,"SELECT*FROM `user` WHERE `email` = '".$email."'");
    $email_count = mysqli_num_rows($email_data);
    if($email_count > 0){
        echo "email sudah terdaftar";
    }else{
        $inser = mysqli_query($koneksi,"INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username','$email','$password')");
        header("location: login.php");
    }
}