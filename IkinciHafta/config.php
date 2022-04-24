<?php


$server = "localhost";
$user = "id18806314_admin";
$pass = "Getrekttakezo442.";
$database = "id18806314_kullanicilar";

$conn = mysqli_connect($server, $user, $pass, $database);


if(!$conn) 
{
    die("<script>alert('Bağlantı Sağlanamadı!')</script>");
}

?>