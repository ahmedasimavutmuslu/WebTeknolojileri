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


    <div class="container-sehrim">
        <p class="header">
            Giresun'un Tarihçesi
        </p>
        <br>
        <p class="paragraph">
        Giresun (Rumca: Κερασούντα, romanize: Kerasunta; Lazca: K'erosili), Giresun'un merkez ilçesi olup, batısında Bulancak, güney ve güneydoğusunda Dereli ve doğusunda Keşap ile çevrilidir. Şehrin başlıca gelir kaynağı fındıktır. Giresun 1397 yılında Türkmen Beyleri Emir oğlu Süleyman Bey ve Pir Kadem Çakır bey tarafından fethedilmiş olup o zamandan bu yana işgal görmemiştir. Daha sonraki yıllarda Osmanlıların Trabzon İmparatorluğu'nu 1461 yılında fethi ile Giresun da Osmanlı Devleti'nin hakimiyetine geçmiştir. 1500'li yıllardaki tahrir defterlerinde Giresun ve civarının (Koyulhisar/Büyükliman/Vakfıkebir) arası Vilayeti Çepni olarak görünüyor ve özel bir yönetimle idare ediliyordu. Beylikler döneminden sonra (1461) Osmanlı İmparatorluğu'nun Trabzon Vilayeti'ne bağlanmış olan Giresun, 1920'de Ordu, Tirebolu ve Görele kazalarıyla birleştirilerek Giresun Sancağı kurulmuştur. 1923'te il olmuştur. Giresun nüfusu 2021 yılına göre 450.154'dir.

        </p>
        <br>
        <p class="header">
            Giresun'un Coğrafi Özellikleri

        </p>
        <p class="paragraph">
        İl merkezi, Aksu ve Batlama vadileri arasında denize doğru uzanan bir yarımada üzerinde kurulmuş olup, bu yarımadanın doğusunda ve 2 km açığında Doğu Karadeniz’in tek adası olan Giresun Adası bulunmaktadır. İlin kuzeyi ile güneyi arasındaki iklim farkı, yağış miktarının güneye doğru azalması doğal bitki örtüsünün yapısını da aynı ölçüde etkilemektedir. Giresun ve çevresi, zengin tarım alanlarına sahiptir. Kelkit Vadisi ile kollarının civarı bozkır görünümünde olmasına karşın, kıyı ile dağlar arasında kalan kesimi ormanlarla kaplıdır.

        </p>
        <br>
        <p class="header">
            Gezilebilecek Yerler

        </p>
        <p class="paragraph">
            Giresun doğa ile iç içe bir şehir olup bu manada gezilebilecek çokça yer bulunmaktadır. Bunlara birkaç örnek olarak şunlar verilebilir:
            <ul class="sehir-liste" style=" color:rgb(255, 255, 255);font-weight: 500;font-size: 1.2rem;text-align: justify;margin-bottom:20px ;display: block;">
                <li class="eleman"><p>Kuzulan Şelalesi</p></li>
                <li class="eleman"><p>Kulakkaya Yaylası</p></li>
                <li class="eleman"><p>Giresun Kalesi</p></li>
                <li class="eleman"><p>Mavi Göl</p></li>

            </ul>

        </p>
        <br>
        <div class="slideshow-container">
            <div class="slider-sehrim">
                    <div class="numbertext">1 / 4</div>
                    <a href="kuzulan-selalesi.php"><img src="https://i4.hurimg.com/i/hurriyet/75/1110x740/5f55efa2c03c0e0db81e68b4.jpg" style="width:100%"></a>
                    <div class="text">Kuzulan Şelalesi</div>
                </div>

                <div class="slider-sehrim">
                    <div class="numbertext">2 / 4</div>
                    <a href="kulakkaya-yaylasi.php"><img src="https://giresun.ktb.gov.tr/Resim/269021,kulakkaya-yaylasibmp.png?0" style="width:100%"></a>
                    <div class="text">Kulakkaya Yaylası</div>
                </div>

                <div class="slider-sehrim">
                    <div class="numbertext">3 / 4</div>
                    <a href="giresun-kalesi.php"><img src="https://i2.milimaj.com/i/milliyet/75/0x0/5f6c7e585542831e685ec208.jpg" style="width:100%"></a>
                    <div class="text">Giresun Kalesi</div>
                </div>

                <div class="slider-sehrim">
                    <div class="numbertext">4 / 4</div>
                    <a href="mavi-gol.php"><img src="https://i03.appmifile.com/541_bbs_en/29/09/2020/e4a62d83c6.jpg" style="width:100%"></a>
                    <div class="text">Mavi Göl</div>
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
            





    </div>

    <script id="control_slider" src="slider-sehir.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>