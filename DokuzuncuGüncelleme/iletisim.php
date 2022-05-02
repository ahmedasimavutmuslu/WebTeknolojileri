<?php
    session_start();

    if(isset($_POST['submit'])) 
    {
        $_SESSION['isim'] = $_POST['isim'];
        $_SESSION['sisim'] = $_POST['sisim'];
        $_SESSION['email'] = $_POST['email'];
        if($_POST['erkek']) 
        {
            $_SESSION['cinsiyetIletisim'] = $_POST['erkek'];
        }
        else if($_POST['kadin']) 
        {
            $_SESSION['cinsiyetIletisim'] = $_POST['kadin'];
        }
        else if($_POST['diger'])
        {
            $_SESSION['cinsiyetIletisim'] = $_POST['diger'];
        }
        else 
        {
            $_SESSION['cinsiyetIletisim'] = null;
        };
    
        $_SESSION['ulke'] = $_POST['ulke'];
        $_SESSION['sehir'] = $_POST['sehir'];
        $_SESSION['sorun'] = $_POST['sorun'];
        $_SESSION['sorunAciklama'] = $_POST['sorunAciklama'];
    

    }

   

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="iletisimstylee.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
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
        <form action="iletisim-gonderilen.php" method="POST" class="iletisim" id="iletisim">
            
            <label for="isim">İsim:</label>
            <div class="form-control "> 
            <input class="style" type="text" id="isim" name="isim">
            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>
            <br>
            <label for="sisim">Soyisim:</label>
            <div class="form-control "> 
            <input class="style"  type="text" id="sisim" name="sisim">
            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>
            
            <br> 
            <label for="email">Email:</label>
            <div class="form-control"> 
            <input class="style"  type="text" id="email" name="email">
            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>
            <br>
            <br>
            <label for="cinsiyet">Cinsiyet:</label>
            <div class="form-control"> 
            Erkek
            <input type="radio" id="cinsiyet" name="cinsiyet" value="Erkek" checked>
            Kadın
            <input type="radio" id="cinsiyet" name="cinsiyet" value="Kadın">
            Diğer
            <input type="radio" id="cinsiyet" name="cinsiyet" value="Diğer">
            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>
            <br>
            <br>
            <label for="ulke">Ülke:</label>
            <div class="form-control"> 
            
                <select id="ulke" name="ulke" readonly>
                    <option value="Türkiye">Türkiye</option>
                </select>

            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>
            <br>
            <label for="sehir">Şehir:</label>
            <div class="form-control"> 
                <select id="sehir" name="sehir">
                    <option value="Adana">Adana</option>
                    <option value="Adıyaman">Adıyaman</option>
                    <option value="Afyonkarahisar">Afyonkarahisar</option>
                    <option value="Ağrı">Ağrı</option>
                    <option value="Amasya">Amasya</option>
                    <option value="Ankara">Ankara</option>
                    <option value="Antalya">Antalya</option>
                    <option value="Artvin">Artvin</option>
                    <option value="Aydın">Aydın</option>
                    <option value="Balıkesir">Balıkesir</option>
                    <option value="Bilecik">Bilecik</option>
                    <option value="Bingöl">Bingöl</option>
                    <option value="Bitlis">Bitlis</option>
                    <option value="Bolu">Bolu</option>
                    <option value="Burdur">Burdur</option>
                    <option value="Bursa">Bursa</option>
                    <option value="Çanakkale">Çanakkale</option>
                    <option value="Çankırı">Çankırı</option>
                    <option value="Çorum">Çorum</option>
                    <option value="Denizli">Denizli</option>
                    <option value="Diyarbakır">Diyarbakır</option>
                    <option value="Edirne">Edirne</option>
                    <option value="Elazığ">Elazığ</option>
                    <option value="Erzincan">Erzincan</option>
                    <option value="Erzurum">Erzurum</option>
                    <option value="Eskişehir">Eskişehir</option>
                    <option value="Gaziantep">Gaziantep</option>
                    <option value="Giresun">Giresun</option>
                    <option value="Gümüşhane">Gümüşhane</option>
                    <option value="Hakkâri">Hakkâri</option>
                    <option value="Hatay">Hatay</option>
                    <option value="Isparta">Isparta</option>
                    <option value="Mersin">Mersin</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="İzmir">İzmir</option>
                    <option value="Kars">Kars</option>
                    <option value="Kastamonu">Kastamonu</option>
                    <option value="Kayseri">Kayseri</option>
                    <option value="Kırklareli">Kırklareli</option>
                    <option value="Kırşehir">Kırşehir</option>
                    <option value="Kocaeli">Kocaeli</option>
                    <option value="Konya">Konya</option>
                    <option value="Kütahya">Kütahya</option>
                    <option value="Malatya">Malatya</option>
                    <option value="Manisa">Manisa</option>
                    <option value="Kahramanmaraş">Kahramanmaraş</option>
                    <option value="Mardin">Mardin</option>
                    <option value="Muğla">Muğla</option>
                    <option value="Muş">Muş</option>
                    <option value="Nevşehir">Nevşehir</option>
                    <option value="Niğde">Niğde</option>
                    <option value="Ordu">Ordu</option>
                    <option value="Rize">Rize</option>
                    <option value="Sakarya">Sakarya</option>
                    <option value="Samsun">Samsun</option>
                    <option value="Siirt">Siirt</option>
                    <option value="Sinop">Sinop</option>
                    <option value="Sivas">Sivas</option>
                    <option value="Tekirdağ">Tekirdağ</option>
                    <option value="Tokat">Tokat</option>
                    <option value="Trabzon">Trabzon</option>
                    <option value="Tunceli">Tunceli</option>
                    <option value="Şanlıurfa">Şanlıurfa</option>
                    <option value="Uşak">Uşak</option>
                    <option value="Van">Van</option>
                    <option value="Yozgat">Yozgat</option>
                    <option value="Zonguldak">Zonguldak</option>
                    <option value="Aksaray">Aksaray</option>
                    <option value="Bayburt">Bayburt</option>
                    <option value="Karaman">Karaman</option>
                    <option value="Kırıkkale">Kırıkkale</option>
                    <option value="Batman">Batman</option>
                    <option value="Şırnak">Şırnak</option>
                    <option value="Bartın">Bartın</option>
                    <option value="Ardahan">Ardahan</option>
                    <option value="Iğdır">Iğdır</option>
                    <option value="Yalova">Yalova</option>
                    <option value="Karabük">Karabük</option>
                    <option value="Kilis">Kilis</option>
                    <option value="Osmaniye">Osmaniye</option>
                    <option value="Düzce">Düzce</option>
                </select>

            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>
            <br>
            <label for="sorun">Sorun:</label>
            <div class="form-control"> 
            <select id="sorun" name="sorun">
                <option value="Kayıt Olamıyorum">Kayıt Olamıyorum</option>
                <option value="Giriş Yapamıyorum">Giriş Yapamıyorum</option>
                <option value="Diğer">Diğer</option>
            </select>

            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>

            <label for="sorun">Sorun Açıklaması:</label>
            <br>
            <div class="form-control"> 
            <textarea id="sorunAciklama" name="sorunAciklama" rows="5" cols="10" placeholder="Lütfen buraya yazınız!"></textarea>

            <i class="fas fa-check-circle "></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Hata mesajı</small>
            </div>


            <br>
            <br>
            <input class="button"  type="reset" id="temizle" name="temizle" value="Temizle">
            <br>
            <input class="button"  type="submit" id="gonder" name="gonder" value="Gönder" onclick="return val()">
            
            





        </form>




    </div>




    <script id="kontrol-icin-js" src="iletisim.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



</body>
</html>