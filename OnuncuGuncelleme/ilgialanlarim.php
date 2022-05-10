<?php
    session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ilgialanlarimstyle.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    
</head>

<body>
    <?php if($_SESSION['loggedIn']): ?>
    <script id="replace_with_navbar" src="nav-loggedin.js"></script>
    <?php else: ?>
    <script id="replace_with_navbar" src="nav.js"></script>
    <?php endif; ?>

    <div class="container-ilgialanim">
        <img class="michael-jordan" src="https://staticg.sportskeeda.com/editor/2022/02/af653-16442505538786-1920.jpg">
        <br>
        <p class="isim-header">Oyuncunun İsmi: </p>
        <p class="isim" id="isim"></p>
        <br>
        <p class="soyisim-header">Oyuncunun Soyismi: </p>
        <p class="soyisim" id="soyisim"></p>
        <br>
        <p class="takim-header">Oyuncunun Takımı: </p>
        <p class="takim" id="takim"></p>
        <br>
        <p class="konferans-header">Takımının Bulunduğu Konferans: </p>
        <p class="konferans" id="konferans"></p>
        <br>
        <p class="division-header">Takımının Bulunduğu Grup: </p>
        <p class="division" id="division"></p>
        <br>
        <p class="takiminsehri-header">Takmının Bulunduğu Şehir: </p>
        <p class="takiminsehri" id="takiminsehri"></p>



    </div>
    <script src="basketbolapi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>