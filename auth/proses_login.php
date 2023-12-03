<?php

$email = $_POST['email'];
$password = md5($_POST['password']);
include '../koneksi.php';


$username_data = mysqli_query($koneksi," SELECT*FROM `user` WHERE `email` = '".$email."'");
// var_dump($username_data);
$username_count = mysqli_num_rows($username_data);


if($username_count == 1){
    $password_data = mysqli_query($koneksi," SELECT*FROM `user` WHERE `password` = '".$password."'");
    $password_count = mysqli_num_rows($password_data);
    if($password_count == 1){
        $user = mysqli_fetch_array($username_data);
        session_start();
        echo $_SESSION['username'] = $user['username'];
        echo $_SESSION['email'] = $user['email'];
        echo $_SESSION['id'] = $user['id'];
        header("location: ../dashboard.php");

        
    }else{
        echo "psw salah";
    }
}else{
    echo "username salah";
}
