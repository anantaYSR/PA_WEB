<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/tambah.css">
    
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
            <a href="../index.php">
                <i class="material-icons">home</i>
            </a>
                <a href="../../logout.php"></a>
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
                    <li><a href="../index.php #abt">ABOUT</a></li>
                    <li><a href="../index.php #syt">PERSYARATAN</a></li>
                    <li><a href="../index.php #fbk">FEEDBACK </a></li>
                    <li><a href="../index.php #masukan">MASUKAN</a></li>
                    <li><a href="../index.php #follow">FOLLOW</a></li>
                </ul>
            </div>
        </div>
        <div class="testbox">
            <form action="" method="post">
                <h3>Relasi Perusahaan </h3>
                <input type="text" placeholder="Nama Perusahaan" name="nama" required autocomplete="off">
                <input type="text" placeholder="Bidang Perusahaan" name="bidang" required autocomplete="off">
                <input type="text" placeholder="Tahun" name="tahun" required autocomplete="off">
                <input type="text" placeholder="Lama kerjasama" name="lama" required>
                <input type="submit" name="btn" class="submit" value="Tambah">
            </form>
        </div>
        <footer id="footer">
            <h2 class="foll-h2">FOLLOW US</h2>
            <ul>
                <li><a href=""><img src="../../pic/fb.png" alt=""></a></li>
                <li><a href=""><img src="../../pic/ig.png" alt=""></a></li>
                <li><a href=""><img src="../../pic/wa.png" alt="" class="wa"></a></li>
            </ul>
            <small>Copyright 2022 by CK Pialang</small>
        </footer>
    </div>
    
</body>
</body>
<script src="../../js/index.js"></script>
</html>
</head>
<?php
require '../../konfik.php';

if(isset($_POST['btn'])){
    $nama=$_POST['nama'];
    $bidang=$_POST['bidang'];
    $tahun=$_POST['tahun'];
    $lama=$_POST['lama'];
    $query = "INSERT INTO perusahaan (nama, bidang, tahun, lama_kerjasama) VALUES ('$nama', '$bidang','$tahun','$lama')";
    $result=$db->query($query);

    if ($result){
        echo "<script>
            alert('Berhasil menambahkan data')
            document.location.href='tbl_perusahaan.php';
                </script> ";
    }
    else{
        echo "<script>
            alert('Gagal menambahkan data')
            document.location.href='tbl_perusahaan.php';
                </script> ";
    }
}
?>

