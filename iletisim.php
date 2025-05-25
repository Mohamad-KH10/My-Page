<?php
// Formdan gelen verileri alır
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$dogum = $_POST['dogum'];
$egitim = $_POST['egitim'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];
$cinsiyet = $_POST['cinsiyet'];

// Form verilerini ekrana yazdır
echo "Ad: " . $ad . "<br>";
echo "Soyad: " . $soyad . "<br>";
echo "Doğum Tarihi: " . $dogum . "<br>";
echo "Eğitim Seviyesi: " . $egitim . "<br>";
echo "Email: " . $email . "<br>";
echo "Cinsiyet: " . $cinsiyet . "<br>";
echo "Mesaj: " . $mesaj . "<br>";

?>