<?php
$dogru_kullanici_adi = "b231210554@gmail.com";
$dogru_sifre = "b231210554";

// تحقق من أن النموذج أُرسل
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelen_kullanici = $_POST['id'];
    $gelen_sifre = $_POST['sifre'];

    if ($gelen_kullanici === $dogru_kullanici_adi && $gelen_sifre === $dogru_sifre) {
        // البيانات صحيحة → التوجيه إلى merhaba.html
        header("Location: merhaba.html");
        exit();
    } else {
        // البيانات خاطئة → عرض رسالة خطأ وإعادة التوجيه
        echo "<script>
            alert('Bilgiler hatalı, lütfen tekrar deneyin.');
            window.location.href = 'login.html';
        </script>";
        exit();
    }
}
?>
