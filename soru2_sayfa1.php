<?php

/*
SORU 2:
Oturum (session) ve oturum değişkenlerini kullanarak bir sepet uygulaması oluşturmanız beklenmektedir.
Bu uygulama 2 sayfadan oluşacaktır:
İlk sayfada:

Ürün adı, adedi, fiyatı bilgileri girilebildikçek ve her ekleme işleminden sonra kullanıcı yine ilk sayfayı görecektir
Bu sayfada bulunan bir Hesap butonu ise kullanıcıyı ikinci sayfaya yönlendirecektir

İkinci sayfada:

Tüm eklenen ürünler liste halinde üstte sıralanacak
En altta ise tüm ürünlerin toplam bedeli bulunacaktır
Bu sayfada bulunan Geri Dön butonu ile kullanıcıları ilk sayfaya yönlendirecek
Tamam butonu tüm listeyi temizleyecek, sonra kullanıcıyı ilk sayfaya yönlendirecektir

Belirtilen dokümanlara ait PHP/HTML kodunu yazınız.
*/
    session_start();

    if(!isset($_SESSION['sepet'])){
        $_SESSION['sepet'] = Array();
    }

    if(isset($_POST["ekle"])){
        $adi = $_POST["urun_adi"];
        $adet = $_POST["adet"];
        $fiyat = $_POST["fiyat"];

        $yeni_urun = Array(
            'adi' => $adi,
            'adet' => $adet,
            'fiyat' => $fiyat
        );

        $_SESSION['sepet'][] = $yeni_urun;
    }

?>


<html>
<head>
    
</head>
<body>
    <form action="soru2_sayfa1.php" method="POST">
    Urun Adı:<input type="text" name="urun_adi">
    Urun Adedi:<input type="text" name="adet">
    Urun Fiyatı:<input type="text" name="fiyat">
    <input type="submit" name="ekle" value="Urun Ekle">
    </form>
    
    <form method="POST" action="soru2_sayfa2.php">
    <input type="submit" value="Hesap">
    </form>
</body>
</html>