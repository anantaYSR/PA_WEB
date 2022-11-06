<?php
require '../konfik.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$result=mysqli_query($db, 
"SELECT * FROM user WHERE id='$id'");
$row=mysqli_fetch_array($result);

if(isset($_POST['btn'])){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $passw=password_hash($pass, PASSWORD_DEFAULT);

    $query = mysqli_query($db, 
    "UPDATE user SET
    nama ='$nama',
    username ='$username',
    email ='$email',
    pass = '$passw'
    WHERE id='$id'");

    if ($query){
        echo "<script>
            alert('Berhasil merubah data')
            document.location.href='../logout.php';
                </script> ";
    }
    else{
        echo "<script>
            alert('Gagal merubah data')
            document.location.href='index.php';
                </script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/tambah.css">
    
    <style>
        input[type="submit"]{
            margin-top: 50px;
            width: 100%;
            height:50px;
            background-color: #C06014;
            color: #ffffff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="header">
            <div class="name-header"><p><k class="k">CK</k> PIALAN<p class="g">G</p></p></div>
            <nav>
            <a href="index.php">
                <i class="material-icons">home</i>
            </a>
                <a href=""></a>
                <a href="#">
                    <i class="material-icons">logout</i>
                </a>
            </nav>
            <div class="btn" id="btn">
                <line></line>
                <line></line>
                <line></line>
            </div>
        </div>
        <div class="menu">
            <div class="nav">
                <ul>
                    <li><a href="../index.html #abt">ABOUT</a></li>
                    <li><a href="#syt">PERSYARATAN</a></li>
                    <li><a href="#fbk">FEEDBACK </a></li>
                    <li><a href="#masukan">MASUKAN</a></li>
                    <li><a href="#follow">FOLLOW</a></li>
                </ul>
            </div>
        </div>
        <div class="testbox">
            <form action="" method="post">
                <h3>Ubah Akun </h3>
                <input type="text" placeholder="Nama Lengkap" name="nama" required autocomplete="off">
                <input type="text" placeholder="Username" name="username" required autocomplete="off">
                <input type="email" placeholder="Email" name="email" required autocomplete="off">
                <input type="password" placeholder="Password" name="pass" required>
                <input type="submit" name="btn" class="submit" value="UBAH">
            </form>
        </div>
        <footer id="footer">
            <h2 class="foll-h2">FOLLOW US</h2>
            <ul>
                <li><a href=""><img src="../pic/fb.png" alt=""></a></li>
                <li><a href=""><img src="../pic/ig.png" alt=""></a></li>
                <li><a href=""><img src="../pic/wa.png" alt="" class="wa"></a></li>
            </ul>
            <small>Copyright 2022 by CK Pialang</small>
        </footer>
    </div>
    
</body>
</body>
<script src="../js/index.js"></script>
</html>
</head>
