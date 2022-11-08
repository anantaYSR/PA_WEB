<?php
    session_start();
    require 'konfik.php';

    if(isset($_SESSION['login'])){
        if($_SESSION['login']=='admin'){
            header('location: ./admin/index.php');
            exit;
        }
        elseif($_SESSION['login']=='user'){
            header("location: ./user/index.php");
        }
    }

    if(isset($_POST['btn'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];

        $result= mysqli_query($db, "SELECT * FROM user WHERE username='$username' OR email='$username'");

        if (mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            $nama=$row['nama'];

            if (password_verify($pass, $row['pass'])){
                $_SESSION['login']=$nama;
                echo "<script>
                        alert('Selamat datang $nama');
                        document.location.href='./user/index.php';
                         </script> ";
                exit;
            }
            else{
                echo "<script>
                        alert('Username dan Password anda salah');
                        document.location.href='index.php';
                         </script> ";
            }
        }
        else if ($username=='admin' && $pass=='admin'){
            $_SESSION['login']='admin';
            echo "<script>
                        alert('Selamat datang Admin');
                        document.location.href='./admin/index.php';
                         </script> ";
        }
        else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        document.location.href='register.php';

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
    <link rel="stylesheet" type="text/css" href="css/login2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    <div class="background">
        
    </div>
    <form action="" method="post">
        <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Username" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="pass">
        <input type="submit" name="btn" class="submit" value="LOGIN">
        <p>Belum memiliki akun?
                <a href="register.php">Register</a>
        </p><br><br><br><br>

        <center><a href="index.php"><i class="material-icons">home</i> <br><font size="2">BackToHome</font></a></center> 


    </form>
</body>
</body>
</html>
</head>

