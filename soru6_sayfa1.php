<?php

/*
Ürün, ürün fiyatı ve adedini kullanarak sepet yapısını örnekleyen web dokümanlarını session (oturum) yapısını kullanarak tasarlayınız. İki ayrı sayfadan oluşması beklenen örnekte, ilk sayfada ürün, ürün fiyatı ve adedinin girileceği bir form yer alacaktır. Formun sonlarına eklenmiş bir buton yada link yardımı ile sepetteki o ana kadar girilen değerini (ürünler, adet, fiyat ve toplam fiyat şeklinde) ikinci sayfada liste şeklinde gösterilecektir. Belirtilen web dokümanının kodunu php/HTML kullanarak oluşturunuz.
*/ 

    session_start();
    if(!isset($_SESSION['sepet'])){
        $_SESSION['sepet'] = Array();
    }

    if(isset($_POST['ekle'])){
        $urun=$_POST['urun'];
        $fiyat=(float)$_POST['fiyat'];
        $adet=(int)$_POST['adet'];

        $yeni_urun=array(
            'urun'=>$urun,
            'fiyat'=>$fiyat,
            'adet'=>$adet
        );

        $_SESSION['sepet'][]=$yeni_urun;
    }
?>

<html>
<head>

</head>
<body>

    <form action="" method="POST">
        Urun Adi:<input type="text" name="urun">
        Fiyat:<input type="text" name="fiyat">
        Adet:<input type="text" name="adet">
        <input type="submit" name="ekle" value="Sepete Ekle">
    </form>

    <br>
    <a href="soru6_sayfa2.php">Sepeti Görüntüle</a>

</body>
</html>