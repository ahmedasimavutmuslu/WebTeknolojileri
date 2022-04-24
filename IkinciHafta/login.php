<?php

    include 'config.php';

    session_start();

    if(isset($_SESSION['username'])) 
    {
        header("Location: welcome.php");
    }

    if(isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM kullanicilar WHERE email = '$email' AND password ='$password' ";
        
        $result = mysqli_query($conn, $sql);

        if($result->num_rows>0) 
        {
            
            $row=mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedIn']=true;
            header("Location: welcome.php");
        }
        else
        {
            echo "<script>alert('Email veya Şifre Hatalı!')</script>";
        }
        
    }



?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Giriş Sayfası</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text">Email İle Giriş Yap</p>
            <div class="input-group">
                <input type="email" placeholder="Email Adresiniz" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Şifre" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                
                <button name="submit" class="btn">Giriş Yap</button>
            </div>
            <p class="login-register-text">Hesabınız yok mu? <a href="register.php">Kayıt Ol!</a></p>

    
        </form>
    </div>

    

</body>
</html>