<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login2.css">
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
        </p>
    </form>
</body>
</body>
</html>
</head>

<?php
    // session_start();
    require 'konfik.php';

    // if(isset($_SESSION['login'])){
    //     header("Location: index.php");
    //     exit;
    // }

    if(isset($_POST['btn'])){
        $username=$_POST['username'];
        $pass=$_POST['pass'];

        $result= mysqli_query($db, "SELECT * FROM user WHERE username='$username' OR email='$username'");

        if (mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            $nama=$row['nama'];

            if (password_verify($pass, $row['pass'])){
                echo "<script>
                        alert('Selamat datang $nama');
                        document.location.href='index.php';
                         </script> ";
                exit;
            }
            else{
                echo "<script>
                        alert('Username dan Password anda salah');
                        document.location.href='login.php';
                         </script> ";
            }
        }
        else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        document.location.href='register.php';

                         </script> ";
        }
    }
?>
