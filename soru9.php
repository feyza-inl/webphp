<?php
/*
Aşağıdaki çıktı örneği için, belirtilen yapının POST metodu ile dizi şeklinde geldiğini kabul ederek ve foreach döngüsü/döngüleri kullanarak ilgili çıktıyı oluşturunuz.
Verilen yapı:
1. Ankara
   • Çankaya
   • Etimesgut
   • Gölbaşı
2. Amasya
   • Merzifon
   • Taşova
3. Ağrı
   • Doğubayazıt
   • Patnos
4. Afyon
   • Çay
   • Bolvadin
   • Dinar
*/


if(!isset($_POST['sehirler'])){

    $_POST['sehirler'] = array(
        'Ankara' => array('Çankaya', 'Etimesgut', 'Gölbaşı'),
        'Amasya' => array('Merzifon', 'Taşova'),
        'Ağrı' => array('Doğubayazıt', 'Patnos'),
        'Afyon' => array('Çay', 'Bolvadin', 'Dinar')
    );
    
}

$sehirler = $_POST['sehirler'];

?>

<html>
<head>   
</head>
<body>

        <?php
        $sira=1;

        foreach($sehirler as $sehir=>$ilceler){
            echo "<div class='sehir-baslik'>".$sira." . ".$sehir."</div>";
            foreach($ilceler as $ilce){
                echo "<div class='ilce-item'>".$ilce."</div>";
            }
            $sira++;

        }
        ?>

</body>
</html>