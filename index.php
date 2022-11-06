<?php
require 'konfik.php';

if(isset($_POST['sub'])){
        $masukkan=$_POST['masukan'];
        $query = "INSERT INTO kritik(masukkan) 
        VALUES ('$masukkan')";
        $result = $db->query($query);
        if($result){
            echo "
                <script>
                    alert('Kritik dan Saran anda terkirim');
                </script>
            ";
            
        }else{
            echo "
                <script>
                    alert('Kritik dan saran gagal terkirim');

                </script>
            ";
        }
        
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>PIALANG HOME PAGE</title>
</head>
<body>
    <div class="container">

        <div class="header">
            <div class="name-header"><p><k class="k">CK</k> PIALAN<p class="g">G</p></p></div>
            <nav>
                <a href="login.php">LOGIN</a>
                <a href="register.php">REGISTER</a>
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
                    <li><a href="#abt">ABOUT</a></li>
                    <li><a href="#syt">PERSYARATAN</a></li>
                    <li><a href="#fbk">FEEDBACK </a></li>
                    <li><a href="#masukan">MASUKAN</a></li>
                    <li><a href="#footer">FOLLOW</a></li>
                </ul>
            </div>
        </div>

        <div class="inner">
        </div>
        
        <div class="about" id="abt">
            <h2>ABOUT</h2>
            <p class="isi">Di era industri yang semakin berkembang pesat hingga kini tentunya tidak terlepas dari kerja sama antara 1 orang dengan yang lainnya atau perusahaan dengan perusahaan lainnya. sehingga tujuan antar kedua bela pihak atau lebih dapat cepat tercapai serta efektif.
                           untuk masyarakat yang masih awam dalam tata cara atau prosedur mengajukan penawaran kerja sama bisnis terhadap suatu perusahaan mungkin sangat kesulitan dalam hal ini. maka dari itu kami hadir sebagai alternative dalam permasalahan ini. 
                           <span>CK PIALANG</span> merupakan media atau pihak perantara antara sang pengaju kerjasama dan pihak yang diajukan seperti perusahaan. kami telah menyiapkan form pengajuan yang tinggal diisi oleh sang pengaju tanpa harus memikirkan format 
                           surat dan informasi kontak dari pihak perusahaan. dengan begitu pihak pengaju hanya menngisi form yang telah disiapkan lalu menunggu konfirmasi apakah perminataan kerjasama di setujui atau tidak. pihak CK PIALANG akan mengurusi pengajuan dan mengirimkannya ke pihak perusahaan atau pihak yang di ajukan
            </p>
        </div>
        <div class="syarat" id="syt">
            <h2>PERSYARATAN</h2>
            <p class="isi"></p>
        </div>
        <div class="fnf" id="fbk">
            <h2>FEEDBACK DAN FASILITAS</h2>
            <p class="isi">kami juga sebagi pihak penengah tentu memberikan feedback dan fasilitas yang akan didapatkan dari tiap pihak.</p>
            <div class="kotak">
                <div class="kiri">
                    <div class="isi-kiri">
                        <h3>PENGAJU</h3>
                        <ul>
                            <li>para pengaju hanya perlu mengisikan form pengajuan yang telah tersedia, sehingga tidak perlu membuat persuratan yang ribet</li>
                            <li>para pengaju tidak perlu bingung bagaimana mengirimkan surat pengajuan ke perusahaan karna yang memberikannya adalah pihak ck pialang</li>
                            <li>lebih menghemat waktu dan tenaga</li>
                        </ul>
                    </div>
                </div>

                <div class="kanan">
                    <div class="isi-kanan">
                        <h3>PERUSAHAAN</h3>
                        <ul>
                            <li>CK Pialang memfasilitasi kepada perusahaan terkait untuk membrandingkan diri serta menjadi salah satu tujuan tempat pengajuan kerja sama</li>
                            <li>pihak perusahaan tidak perlu berkomunikasi secara langsung kepada para pengaju</li>
                            <li>waktu lebih efisien karna tidak perlu meminta berkas yg kurang dikarenakan form yang diberikan sudah lengkap</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kritik" id="masukan">
            <h2 class="isi-masukan">BERI MASUKAN</h2>
            <form action="" class="masukan" method="post">
                <input type="text" name="masukan" class="in" placeholder="tulis disini...">
                <input type="submit" name="sub" class="sub">
            </form>
        </div>
        <footer id="footer">
            <h2 class="foll-h2">FOLLOW US</h2>
            <ul>
                <li><a href=""><img src="pic/fb.png" alt=""></a></li>
                <li><a href=""><img src="pic/ig.png" alt=""></a></li>
                <li><a href=""><img src="pic/wa.png" alt="" class="wa"></a></li>
            </ul>
            <small>Copyright 2022 by CK Pialang</small>
        </footer>
    </div> <!--end of container line-->

</body>
<script src="js/index.js"></script>
</html>