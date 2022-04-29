<?php
    session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="sehrimstyle.css">
</head>
<body>

    <?php if($_SESSION['loggedIn']): ?>
    <script id="replace_with_navbar" src="nav-loggedin.js"></script>
    <?php else: ?>
    <script id="replace_with_navbar" src="nav.js"></script>
    <?php endif; ?>


    <div class="container-sehrim" style="width:900px;">
        <p class="header">
            Giresun Hacı Abdullah Duvarı
        </p>
        <p class="paragraph">
        Çin’in kuzeybatısında 2500 kilometre uzunluğundaki (orjinali 6000 kilometre) Çin Seddi dünyanın en uzun savunma duvarı olma özelliğini koruyor. Peki ikincisi nerede diye hiç düşündünüz mü?
        </p>
        
        <img class="gezilecek-gorsel" src="https://i.hizliresim.com/qexvxec.jpg">
        <br>
        <p class="paragraph">
        Giresun‘un Alucra Çakrak Köyü‘ne bağlı Çıkrıkkapı Yaylası‘nda yer alan 6,5 kilometre uzunluğundaki Hacı Abdullah Duvarı‘nın, Çin Seddi‘nden sonra ayakta kalmayı başarabilmiş en uzun savunma duvarı olduğu iddia ediliyor.
        </p>
        <p class="paragraph">
        400 yıl önce inşa edilen 1,5 metrelik yüksekliğe sahip olan tarihi duvarın, Hacı Abdullahzade tarafından 1600’lü yıllarda Rum işçilere yaptırıldığı rivayet ediliyor. Duvarın yapılma amacı ise ekilen ürünleri hayvanlardan korumak.
        </p>
        <p class="paragraph">
        Hacı Abdullahzade’nin onlarca göbekten torunu olan Süreyya Yılmaz, duvarla ilgili olarak şu bilgileri veriyor;O yıllarda ekili alanların korunması için böyle bir duvarı dedemiz ördürmüş. Çambaşı, Mıcıklı deresi, Çıkrıkkapı (Batı düzü), Bardaklı mezarlığı, Karyalağı, Karabacak, Kaymasoğlu tarlası diye adlandırılan bölümler duvarın hududunu oluşturuyor. Rumlardan önce bu topraklarda Cenevizlilerin de yaşadığı belirtiliyor. Ancak Hacı Abdullah Çıkrıkkapı’ya Horasan’dan gelmiş.
        </p>
        
        <img class="gezilecek-gorsel" src="https://i.hizliresim.com/abab30l.jpg">
        <br>
        <p class="paragraph">
        Turizm açısından oldukça önemli olan Çıkrıkkapı Yaylası ve Hacı Abdullah Duvarı günümüzde kaderine terk edilmiş durumda. Bakanlık tarafından da eserin korunmasına yönelik bir çalışma bulunmuyor.        
        </p>
        
        



    </diV>

   





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>