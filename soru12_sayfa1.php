<?php

session_start();

if(!isset($_SESSION['kullanici'])){
    $_SESSION["kullanici"] = array();
}

    if(isset($_POST['ekle'])){
        $ad = $_POST['ad'];
        $soyad = $_POST['soyad'];
        $email = $_POST['email'];
        $sehir = $_POST['sehir'];

        $yeni_kullanici = array(
            'ad' => $ad,
            'soyad' => $soyad,
            'email' => $email,
            'sehir'=> $sehir
        );

    $_SESSION['kullanici'][] = $yeni_kullanici;    
    }
?>

<html>
<head>
</head>
<body>
        <form action="" method="POST">
        Ad:<input type="text" name='ad'><br>
        Soyad:<input type="text" name='soyad'><br>
        Mail:<input type="text" name='email'><br>
        Sehir:<input type="text" name='sehir'><br>
        <input type="submit" name="ekle" value="Kullanici Ekle">     
        </form> 
        <a href="soru12_sayfa2.php">Kayitli kullanicilar</a>

</body>
</html>