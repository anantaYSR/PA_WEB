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
            margin-top: 20px;
            width: 105%;
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
        <h3>Register</h3>
        <input type="text" placeholder="Nama" name="nama" required autocomplete="off">
        <input type="text" placeholder="Email" name="email" required autocomplete="off">
        <input type="text" placeholder="Username" name="username" required autocomplete="off">
        <input type="password" placeholder="Password" name="pass" required>
        <input type="password" placeholder="Konfirmasi Password" name="cpass" required>
        <input type="submit" name="btn" class="submit" value="Registrasi">
        <p>Sudah punya akun?
                <a href="login.php">Login</a>
        </p><br>
        <center><a href="index.php"><i class="material-icons">home</i> <br><font size="2">BackToHome</font></a></center> 

    </form>
</body>
</body>
</html>
</head>

<?php
require 'konfik.php';

if(isset($_POST['btn'])){
    $email=$_POST['email'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    // cek username udah digunakan apa belum

    $sql = "SELECT * FROM user where username='$username'";
    $user = $db->query($sql);

    if (mysqli_num_rows($user)>0){
        echo "<script>
        alert('Username sudah digunakan, silahkan menggunakan username yang lain') </script> ";
    }
    else {
        if ($pass==$cpass){
            $pass=password_hash($pass, PASSWORD_DEFAULT);
            $query = "INSERT INTO user (nama, username, email, pass) VALUES ('$nama', '$username','$email','$pass')";
            $result=$db->query($query);
        
            if ($result){
                echo "<script>
                    alert('Registrasi berhasil')
                    document.location.href='index.php';
                     </script> ";
            }
            else{
                echo "<script>
                    alert('Registrasi gagal')
                    document.location.href='index.php';
                     </script> ";
            }
            
        }
        else{
            echo "<script>
                    alert('Password konfimasi tidak sama dengan password')
                    document.location.href='register.php';
                     </script> ";
        }
    }

}
?>

