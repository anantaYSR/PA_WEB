<?php
    session_start();
    require '../../konfik.php';
    
    if(!isset($_SESSION['login'])){
        echo "<script>
            alert('Silahkan login terlebih dahulu');
            document.location.href='../../index.php';
                </script> ";
    }

    $result = mysqli_query($db, "SELECT * FROM kerjasama");
?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/index.css"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script type="text/javascript" src="../../tabel/jquery.js"></script>
    <script type="text/javascript" src="../../tabel/dataTabel/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../tabel/dataTabel/css/jquery.dataTables.min.css">
    


    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="name-header"><p><k class="k">CK</k> PIALAN<p class="g">G</p></p></div>
            <nav>
                <a href="../index.php">
                    <i class="material-icons">home</i><font size="2">Home</font>
                </a>
                <a href="../../logout.php">
                    <i class="material-icons">logout</i><font size="2">Logout</font>
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
        <div class="center">
        <div class="wrapper">
                <div class="sidebar">
                    <ul>
                        <li>
                            <a href="../tabel user/tabeluser.php">
                                <i class="material-icons">supervisor_account</i>
                                <span>User</span>
                            </a>
                        </li>
                        <li>
                            <a href="../tabel investor/tbl_investor.php">
                                <i class="material-icons">receipt</i>
                                <span>Daftar Investor</span>

                            </a>
                        </li>
                        <li>
                            <a href="../tabel form/tabelform.php">
                                <i class="material-icons">loyalty</i>
                                <span>Calon Investor</span>
                            </a>
                        </li>
                        <li>
                            <a href="../tabel relasi/tbl_perusahaan.php">
                                <i class="material-icons">assessment</i>
                                <span>Relasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="../tabel kritik/tabelkritik.php">
                                <i class="material-icons">build</i>
                                <span>Masukkan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabel-center">
                <table id="tabel-data" width="100%" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama investor</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Tipe Kerjasama</th>
                            <th>Jumlah investasi</th>
                            <th>Lama Waktu</th>
                            <th>Tanggal mengajukan</th>
                            <th>Foto KTP</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php 
                        $i = 1;
                        while($row = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                        <td> <?=$i; ?> </td>
                        <td> <?=$row['nama']?> </td>
                        <td> <?=$row['email']?> </td>
                        <td> <?=$row['nomorhp']?> </td>
                        <td> <?=$row['alamat']?> </td>
                        <td> <?=$row['pekerjaan']?> </td>
                        <td> <?=$row['tipe']?> </td>
                        <td> <?=$row['jumlah']?> </td>
                        <td> <?=$row['waktu']?> </td>
                        <td> <?=$row['tgl_daftar']?> </td>
                        <td><img src="../ktp/<?=$row['foto_ktp']?>" alt="" width=30% height=30%></td>
                        </tr>
                    <?php
                        $i++;}
                    ?>

                        
                    </tbody>

                </table>
            </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabel-data').DataTable({
                "ordering":false,
                "info":false,
                "lengthChange":false,
                "pageLength":3
            }

            );
        });
    </script>
</body>
<script src="../../js/index.js"></script>
</html>

