<?php

    session_start();
    require '../../konfik.php';
    
    if(!isset($_SESSION['login'])){
        echo "<script>
            alert('Silahkan login terlebih dahulu');
            document.location.href='../../index.php';
                </script> ";
    }

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=mysqli_query($db, 
    "DELETE FROM investor WHERE id='$id'");
    if($result){
        echo "
            <script>
                alert('Data Investor Berhasil Dihapus');
                document.location.href='tbl_investor.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data Investor Gagal Dihapus');
            </script>
        ";
    }
}

?>
