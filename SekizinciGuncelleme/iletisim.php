<?php
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iletisimstylee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        
    
</head>

<body>


    
    <?php if($_SESSION['loggedIn']): ?>
    <script id="replace_with_navbar" src="nav-loggedin.js"></script>
    <?php else: ?>
    <script id="replace_with_navbar" src="nav.js"></script>
    <?php endif; ?>



    <br>
    <br>
    <div class="iletisim-container">
        <form class="iletisim" action="" method="post">
            <label for="isim">İsim:</label>
            <input class="style" type="text" id="isim" name="isim">
            <br>
            <label for="sisim">Soyisim:</label>
            <input class="style"  type="text" id="sisim" name="sisim">
            <br> 
            <label for="email">Email:</label>
            <input class="style"  type="text" id="email" name="email">
            <br>
            <br>
            <label for="cinsiyet">Cinsiyet:</label>
            Erkek
            <input type="radio" id="erkek" name="cinsiyet">
            Kadın
            <input type="radio" id="kadin" name="cinsiyet">
            Diğer
            <input type="radio" id="diger" name="cinsiyet">
            <br>
            <br>
            <label for="ulke">Ülke:</label>
            <input class="style"  list="ulke">
                <datalist id="ulke">
                    <option value="Türkiye">
                    <option value="Amerika">
                    <option value="İngiltere">
                    <option value="Arjantin">
                    <option value="Fransa">
                </datalist>
            <br>
            <label for="sehir">Şehir:</label>
            <input class="style"  list="sehir">
                <datalist id="sehir">
                    <option value="Sakarya">
                    <option value="İstanbul">
                    <option value="Kocaeli">
                    <option value="Samsun">
                    <option value="Hatay">
                </datalist>
            <br>
            <label for="sorun">Sorun:</label>
            <select name="arabalar">
                <option value="volvo">Kayıt Olamıyorum</option>
                <option value="saab">Giriş Yapamıyorum</option>
                <option value="diger">Diğer</option>
            </select>
            <label for="sorun">Sorun Açıklaması:</label>
            <br>
            <textarea name="sorun" rows="5" cols="10">Lütfen buraya yazınız!</textarea>


            

                

            <br>
            <br>
            <input class="button"  type="reset" id="temizle" name="temizle" value="Temizle">
            <br>
            <input class="button"  type="submit" id="gonder" name="gonder" value="Gönder">
            





        </form>




    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>