<?php

        session_start();
        require '../konfik.php';
        if(!isset($_SESSION['login'])){
            echo "<script>
                alert('Silahkan login terlebih dahulu');
                document.location.href='login.php';
                    </script> ";
        }

    // if(isset($_SESSION['login'])){
    //     if($_SESSION['login']=='admin'){
    //         header('location: ./admin/index.php');
    //         exit;
    //     }
    //     elseif($_SESSION['login']=='user'){
    //         // header("location: index.php");
    //     }
    // }
    // else{
    //     echo "<script>
    //     alert('Silahkan login terlebih dahulu');
    //     document.location.href='../login.php';
    //         </script> ";
    // }

    if(isset($_POST['btn'])){
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $nomorhp=$_POST['nomorhp'];
        $alamat=$_POST['alamat'];
        $pekerjaan=$_POST['pekerjaan'];
        $tipe=$_POST['tipe'];
        $jumlah=$_POST['jumlah'];
        $waktu=$_POST['waktu'];
        $tanggalJoin=$_POST['tanggalDaftar'];
        $ktp = $_FILES['ktp']['name'];
        $x = explode('.',$ktp);
        $ekstensi = strtolower(end($x));
        $foto_ktp = "$nama.$ekstensi";
        $tmp = $_FILES['ktp']['tmp_name'];
        if(move_uploaded_file($tmp, '../admin/ktp/'.$foto_ktp)){
            $query = "INSERT INTO kerjasama(nama, email, nomorhp ,alamat, pekerjaan, tipe, jumlah, waktu, tgl_daftar, foto_ktp) 
            VALUES ('$nama', '$email', '$nomorhp', '$alamat', '$pekerjaan', '$tipe', '$jumlah', '$waktu', '$tanggalJoin','$foto_ktp')";
            $result = $db->query($query);
            if($result){
                echo "
                    <script>
                        alert('Pesanan Berhasil Ditambah');
                        document.location.href='index.php';
                    </script>
                ";
                
            }else{
                echo "
                    <script>
                        alert('Pesanan Gagal Ditambah');
                        document.location.href='index.php';

                    </script>
                ";
            }
            
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Kerjasama</title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/user.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="../css/index.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
    input[type="submit"] {
        width: 150px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #c06014;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
    background: #095484;
    }
    </style>


</head>

<body>
    <div class="container">

        <div class="header">
            <div class="name-header"><p><k class="k">CK</k> PIALAN<p class="g">G</p></p></div>
            <nav>
                <a href="index.php">HOME</a>
                <a href="../logout.php">LOGOUT</a>
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
                    <li><a href="index.php #abt">ABOUT</a></li>
                    <li><a href="index.php #syt">PERSYARATAN</a></li>
                    <li><a href="index.php #fbk">FEEDBACK </a></li>
                    <li><a href="index.php #masukan">MASUKAN</a></li>
                    <li><a href="index.php #follow">FOLLOW</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="testbox">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="banner">
                <h1>FORM PERJANJIAN KERJASAMA</h1>
            </div>
            <p>Silahkan Isi data diri anda dan tujuan kerjasama di bawah ini, jika anda mengisi dan mengirim form ini
                maka anda menyetujui peraturan yang berlaku !!!</p>
            <legend>Data Diri</legend>
            <fieldset>
                <div class="item">
                    <label for>Nama<span>*</span></label>
                    <input type="text" name="nama" required autocomplete="off" />
                </div>
                <div class="item">
                    <label for>Alamat<span>*</span></label>
                    <input type="text" name="alamat" required autocomplete="off"/>
                </div>
                <div class="item">
                    <label for>Nomor HP<span>*</span></label>
                    <input type="text" name="nomorhp" required autocomplete="off"/>
                </div>
                <div class="item">
                    <label for >Pekerjaan<span>*</span></label>
                    <input type="text" name="pekerjaan" autocomplete="off" required />
                </div>
                <div class="item">
                    <label for>Email<span>*</span></label>
                    <input type="email" name="email" autocomplete="off" required />
                </div>
            </fieldset>
            <legend>Perjanjian Kerjasama </legend>
            <fieldset>
                <div>
                    <label for>Tipe Kerjasama<span>*</span></label>
                    <select name="tipe">
                        <option value="Persorangan" >Persorangan</option>
                        <option value="Tim Kecil" >Tim kecil</option>
                        <option value="Organisasi">Organisasi</option>
                        <option value="CV">CV</option>
                        <option value="PT">PT</option>
                    </select>
                </div>
                <div class="item">
                    <label for>Jumlah Investasi<span>*</span></label>
                    <input type="number" name="jumlah" required  />
                </div>
                <div>
                    <label for>Lama Waktu Investasi<span>*</span></label>
                    <select name="waktu">
                        <option  value="6 Bulan" >6 bulan</option>
                        <option value="1.5 Tahun" >1.5 Tahun</option>
                        <option value="2 tahun">2 Tahun</option>
                        <option value="2.5 Tahun">2.5 Tahun</option>
                        <option value="3 Tahun">3 Tahun</option>
                    </select>
                </div>
                <div class="item">
                    <label for>Foto KTP<span>*</span></label>
                    <input  type="file" name="ktp" required />
                    <input type="hidden" name="tanggalDaftar" value=<?=date("Y-m-d")?>>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="aggre" value="True" require><br> <i>I agree to the Privacy Poalicy for PT.CK Pialang</i>
                </div>
                <div class="btn-block">
                    <input type="submit" name="btn" value="APPLY">
                </div>
        </form>
    </div>
    <div class="container">
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
<script src="../js/index.js"></script>
</html>

