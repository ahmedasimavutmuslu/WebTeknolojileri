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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    
    <?php if($_SESSION['loggedIn']): ?>
    <script id="replace_with_navbar" src="nav-loggedin.js"></script>
    <?php else: ?>
    <script id="replace_with_navbar" src="nav.js"></script>
    <?php endif; ?>
        

    <div class="container-paragraph">
        <p class="header-paragraph">
            Hakkımda
        </p>
        <p class="first-paragraph">
            Herkese merhaba! İsmim Ahmed Asım Avutmuşlu. Bu web sitesini ödevim doğrultusunda hazırladım. Öncelikle kendimi tanıtayım. 5 Eylül 2000 tarihinde Fatih/İstanbul'da dünyaya geldim. Üniversite eğitimime kadar da İstanbul'da yaşadım. Bu yüzden ilkokul-ortaokul-lise eğitimimi de yine İstanbul'da aldım. Aslen Giresunluyum. Bir ablam, ikizim, küçük kardeşim ve babamla birlikte yaşıyoruz.  

        </p>
        <br>
        <p class="second-paragraph">
            Video oyunları oynamayı, yemek yapmayı, yeni yerler gezip görmeyi çok severim. Ancak, bir sıralama yapmak gerekirse en başa müzik dinlemeyi koyardım. Bunun nedeni ise neredeyse her an müzik dinleyen bir insanım. Üzgünken, mutluyken veyahut heyecanlıyken müzik, bana eşlik eder. Şu an favorim sayılabilecek belli başlı sanatçılardan/gruplardan söz etmem gerekirse bunlar Lorn, Perturbator, Krobak ve Black Hill olurdu. Mutlaka dinlemenizi öneririm.

        </p>
        <br>

        <p class="third-paragraph">
            Aynı şekilde önerebileceğim bir kaç video oyunu da bulunuyor. Bunlar sırasıyla Ruiner, Transistor ve de Hyper Light Drifter.


        </p>
        <br>
        <p class="fourth-paragraph">
            Tüm bunların dışında spor yapmayı ve fiziksel aktiviteleri de seviyorum. Çocukluğumda bir süre amatör bir şekilde Bilgi Üniversitesi'nde basketbol oynadım. Günümüzde ise yakın bir zamana kadar kick boks ile uğraşıyordum.

        </p>

        <p class="fifth-paragraph">
            Son olarak eklemem gerekirse, yukarıda konuştuğum bir çok konu hakkında detaylı bilgi ve görüşlerimi öğrenmek için sitemde bulunan gezinme çubuğunu kullanarak, üstünde belirtilen ve ilginizi çeken kısımları gezebilirsiniz.

        </p>


    </div>

    


    
    
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>