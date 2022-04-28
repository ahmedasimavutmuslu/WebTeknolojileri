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
        
    <br>
    <div class="container-paragraph">
        <p class="header-paragraph">
            Hakkımda
        </p>
        <p class="first-paragraph">
            Herkese merhaba! İsmim Ahmed Asım Avutmuşlu. Bu web sitesini ödevim doğrultusunda hazırladım. Öncelikle kendimi tanıtayım. 5 Eylül 2000 tarihinde Fatih/İstanbul'da dünyaya geldim. Üniversite eğitimime kadar da İstanbul'da yaşadım. Bu yüzden ilkokul-ortaokul-lise eğitimimi de yine İstanbul'da aldım. Aslen Giresunluyum. Bir ablam, ikizim, küçük kardeşim ve babamla birlikte yaşıyoruz.  

        </p>
        <br>
        <p class="second-paragraph">
            Video oyunları oynamayı, yemek yapmayı, yeni yerler gezip görmeyi çok severim. Ancak, bir sıralama yapmak gerekirse en başa müzik dinlemeyi koyardım. Bunun nedeni ise neredeyse her an müzik dinleyen bir insanım. Üzgünken, mutluyken veyahut heyecanlıyken müzik, bana eşlik eder. Şu an favorim sayılabilecek belli başlı sanatçılardan/gruplardan söz etmem gerekirse bunlar Lorn, Perturbator, Krobak ve Black Hill olurdu. Mutlaka dinlemenizi öneririm. (Resimlerin üzerine tıklayarak Spotify sayfalarına gidebilirsiniz.)

        </p>
        <br>
        
        <div class="slideshow-container">

            
            <div class="slider-fade">
                <div class="numbertext">1 / 4</div>
                <a href="https://open.spotify.com/artist/1PmVyfIR9KtCxbHWuga8E5"><img src="https://images.fanart.tv/fanart/lorn-52f147a1d075f.jpg" style="width:100%"></a>
                <div class="text">Lorn</div>
            </div>

            <div class="slider-fade">
                <div class="numbertext">2 / 4</div>
                <a href="https://open.spotify.com/artist/244uLu9lkdw39BJwlul3k8"><img src="https://i.hizliresim.com/q2xea01.jpg" style="width:100%"></a>
                <div class="text">Perturbator</div>
            </div>

            <div class="slider-fade">
                <div class="numbertext">3 / 4</div>
                <a href="https://open.spotify.com/artist/3NSPUQNQB8sZ4dUdHSGa0Z"><img src="https://maximumvolumemusic.com/wp-content/uploads/2016/10/zz6t_Krobakband2016-1.png" style="width:100%"></a>
                <div class="text">Krobak</div>
            </div>

            <div class="slider-fade">
                <div class="numbertext">4 / 4</div>
                <a href="https://open.spotify.com/artist/64Ql0eGtS5olwVo47Km3zt"><img src="https://i.hizliresim.com/ekgorn3.jpg" style="width:100%"></a>
                <div class="text">Black Hill</div>
            </div>

            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        
        <br>

        <p class="third-paragraph">
            Aynı şekilde önerebileceğim bir kaç video oyunu da bulunuyor. Bunlar sırasıyla Ruiner, Transistor ve de Hyper Light Drifter. (Resimlerin üzerine tıklayarak Steam sayfalarına gidebilirsiniz.)

        </p>
        <br>
        <div class="slideshow-container">

                        
            <div class="slider-game">
                <div class="numbertext">1 / 3</div>
                <a href="https://store.steampowered.com/app/464060/RUINER/"><img src="https://store.donanimhaber.com/c6/dd/6c/c6dd6c3bb3dd176d0829c70fc8db5adb.jpg" style="width:100%"></a>
                <div class="text">Ruiner</div>
            </div>

            <div class="slider-game">
                <div class="numbertext">2 / 3</div>
                <a href="https://store.steampowered.com/app/237930/Transistor/"><img src="https://img.g2a.com/1920x1080/1x1x0/transistor-steam-key-global/590e6e7e5bafe34aae1087bd" style="width:100%"></a>
                <div class="text">Transistor</div>
            </div>

            <div class="slider-game">
                <div class="numbertext">3 / 3</div>
                <a href="https://store.steampowered.com/app/257850/Hyper_Light_Drifter/"><img src="https://cdn.cloudflare.steamstatic.com/steam/apps/257850/capsule_616x353.jpg?t=1649868127" style="width:100%"></a>
                <div class="text">Hyper Light Drifter</div>
            </div>



            <a class="prev-2" onclick="plusSlides2(-1)">&#10094;</a>
            <a class="next-2" onclick="plusSlides2(1)">&#10095;</a>
            </div>
            <br>


            <div style="text-align:center">
            <span class="dot-2" onclick="currentSlide2(1)"></span>
            <span class="dot-2" onclick="currentSlide2(2)"></span>
            <span class="dot-2" onclick="currentSlide2(3)"></span>
            
            </div>

        <br>
        <br>
        <p class="fourth-paragraph">
            Tüm bunların dışında spor yapmayı ve fiziksel aktiviteleri de seviyorum. Çocukluğumda bir süre amatör bir şekilde Bilgi Üniversitesi'nde basketbol oynadım. Günümüzde ise yakın bir zamana kadar kick boks ile uğraşıyordum.

        </p>

        <p class="fifth-paragraph">
            Son olarak eklemem gerekirse, yukarıda konuştuğum bir çok konu hakkında detaylı bilgi ve görüşlerimi öğrenmek için sitemde bulunan gezinme çubuğunu kullanarak, üstünde belirtilen ve ilginizi çeken kısımları gezebilirsiniz.

        </p>


    </div>

    


    
    
    
    <script id="control_slider" src="slider.js"></script>
    <script id="control_slider_2" src="slider2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>