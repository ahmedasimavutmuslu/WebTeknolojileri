<?php

    include 'config.php';

    session_start();

    if(isset($_SESSION['username'])) 
    {
        header("Location: index.html");
    }
    


    if(isset($_POST['submit'])) 
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        
        if($password == $cpassword) 
        {
            $sql = "SELECT * FROM kullanicilar WHERE email = $email ";
            $result = mysqli_query($conn,$sql);
            
            if(!$result->num_rows > 0) 
            {
                $sql = "INSERT INTO kullanicilar (username,email,password) VALUES ('$username','$email','$password') ";
                $result = mysqli_query($conn,$sql);
                if($result) 
                {
                    echo "<script>alert('Tebrikler! Başarıyla Kaydoldunuz.')</script>";
                    $username = "";
                    $email = "";
                     
                }
                else 
                {
                    echo "<script>alert('Hay Aksi! Bir şeyler ters gitti.')</script>";
                }
            }
            else
            {
                echo "<script>alert('Hay Aksi! Email zaten kayıtlı.')</script>";

            }        
           

        }
        else
        {
            echo "<script>alert('Şifreler Uyuşmuyor!')</script>";
        }

    }



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="registerstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Kayıt Sayfası</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST"  class="login-email">
            <p class="login-text">Kayıt Ol</p>
            <div class="input-group">
                <input type="text" placeholder="Kullanıcı Adı" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Şifre" name="password" minlength="8" maxlength="20"  required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Şifre Doğrula" name="cpassword" minlength="8" maxlength="20" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Kaydol</button>
            </div>
            <p class="login-register-text">Zaten hesabınız var mı? <a href="login.php">Giriş Yap!</a></p>

    
        </form>
    </div>

    

</body>
</html>