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
    <link rel="stylesheet" type="text/css" href="egitimstyle.css">
</head>

<body>
    <?php if($_SESSION['loggedIn']): ?>
    <script id="replace_with_navbar" src="nav-loggedin.js"></script>
    <?php else: ?>
    <script id="replace_with_navbar" src="nav.js"></script>
    <?php endif; ?>
    
    <div class="container-egitim">
        <section>
            <article>
                <header>Eğitim Hayatım</header>
                <p> Web Sitemin bu bölümünde eğitim hayatımdan ve bana bu süreçte çokca faydası dokunan insanlardan bahsedeceğim.</p>
            </article>
        </section>
        <section>
            <article>
                <header>İlkokul-Ortaokul Eğitimim</header>
                <img src="https://i.hizliresim.com/hc03ceh.jfif">
                <p> İlkokul-Ortaokul eğitimimi İstanbul Şişli'de bulunan Mustafa Sarıgül adlı okulda aldım. Açıkçası bu zamanlar ile anlatılacak fazla bir şey olmasa da özellikle Perihan adlı öğretmenimizin bize olan sevgisini,şefkatini hala unutamıyorum. Aynı şekilde Pırıl öğretmenimiz matematik bilgimizi sağlam temellere inşa etmemizi sağlamıştı.</p>
                
            </article>
            <br>
            <br>
            <br>
            <article>
                <header>Lise Eğitimim</header>
                <img src="https://hasbahcegazetesi.com/wp-content/uploads/2017/11/Cengizhan-Anadolu-Lisesi-Kağıthane.jpg">
                <p> Lise eğitimimi İstanbul Kağıthane'de bulunan Cengizhan Anadolu Lisesi'nde aldım. Eğitimime ilk başladığım yıl, gerek öğretmen gerek yönetici kadrosyula gerçekten iyi bir okuldu. Altan, Sema, Ömer, Alper ve Pırıl adlı öğretmenlerimizn üstümdeki bir çok uğraşları sonucunda Lise eğitimimi okul üçüncüsü olarak noktaladım. </p>
                
            </article>
            <br>
            <br>
            <article>
                <header>Lisans Eğitimim</header>
                <p> Zamanında girdiğim YKS adlı sınavda istediğim başarıyı yakalayamayınca, sınava tekrardan hazırlanma kararı aldım. Bu hazırlanma sonucunda Sakarya Üniversitesi Elektrik-Elektronik Mühendisliği bölümünde okumaya hak kazandım. 2019-2020 güz döneminde Sakarya Üniversitesi'nde isteğe bağlı yabancı dil hazırlık okudum. Bu süreç boyunca Barış ve Erkan adlı öğretmenlerimiz bana gerek yabancı dil gerek genel kültür gerek ise hayata bakış açısı olarak çok şey kattılar. Sonrasında yabancı dil hazırlık eğitimimi erken bitirip tekrar İstanbul'a döndüm. 2020-2021 döneminde Elektrik-Elektronik Mühendisliği birinci sınıf öğrencisiydim. Bir süre sonra bu bölümün bana uygun olmadığına kanaat getirip, üniversite içerisinde yatay-geçiş yapmayı amaçladım. 2021 senesinin yaz aylarında yatay-geçiş başvurum kabul edildi ve Bilgisayar Mühendisliği bölümüne geçiş yapmış bulundum. Şuan hala eğitimime devam etmekteyim. </p>
                
            </article>
        </section>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>