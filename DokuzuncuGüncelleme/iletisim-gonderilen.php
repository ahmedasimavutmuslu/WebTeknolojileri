<?php
    session_start();

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

    <div class="iletisim-gonderilen-container">



    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Bilgiler</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">İsim</th>
            <?php echo "<td>".$_POST['isim']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Soyisim</th>
            <?php echo "<td>". $_POST['sisim']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Email</th>
            <?php echo "<td>".$_POST['email']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Cinsiyet</th>
            <?php echo "<td>".$_POST['cinsiyet']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Ülke</th>
            <?php echo "<td>".$_POST['ulke']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Şehir</th>
            <?php echo "<td>".$_POST['sehir']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Sorun</th>
            <?php echo "<td>".$_POST['sorun']."</td>"; ?>
            </tr>
            <tr>
            <th scope="row">Sorun Açıklama</th>
            <?php echo "<td>". $_POST['sorunAciklama']."</td>"; ?>
            </tr>
        </tbody>
    </table>

    </div>







    <script id="kontrol-icin-js" src="iletisim.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>