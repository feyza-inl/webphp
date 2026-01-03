<?php

/*
Matematiksel dört işlemin gerçekleştirebildiği biri sorgu diğeri işlem görevlerini gerçekleştiren iki adet web dokümanının HTML/php kodunu oluşturunuz. (Oluşturulan sorgu dokümanı işlemi ve değerleri belirleyecek, işlem dokümanı ise ilgili işlemin sonucunu gösterecektir.)
*/


    $sonuc = "";
    $hata = "";

    if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['islem'])){
        $sayi1 = $_GET['a'];
        $sayi2 = $_GET['b'];
        $islem = $_GET['islem'];

        if(is_numeric($sayi1) && is_numeric($sayi2)){
            switch($islem){
                case 'toplama':
                    $sonuc = $sayi1 + $sayi2;
                    break;
                case 'cikarma':
                    $sonuc = $sayi1 - $sayi2;
                    break;
                case 'carpma':
                    $sonuc = $sayi1 * $sayi2;
                    break;
                case 'bolme':
                    if($sayi2 != 0){
                        $sonuc = $sayi1 / $sayi2;
                    } else {
                        $hata = "Bir sayı sıfıra bölünemez!";
                    }
                    break;
                default:
                    $hata = "Geçersiz işlem!";
            }
        } else {
            $hata = "Lütfen geçerli sayılar giriniz!";
        }
    }
?>

<html>
<head>
</head>
<body>
        <form action="" method="GET">
        Sayı1:<input type="text" name="a">
        Sayı2:<input type="text" name="b">
        Islem:<input type="text" name="islem">
        <input type="submit" Value="Hesapla">

        <?php
        echo "Sonuc: ".$sonuc;
        ?>


        </form>
</body>
</html>
