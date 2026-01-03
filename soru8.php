<?php

/*
İçinde bulunan form ile kendi kendini çağıran ekle.php isimli tek bir php dosyası bir sınıftaki öğrencilerin ad ve soyadlarını session (oturum) yapısı yardımı ile tutarak her çağrıldığında daha önce eklenen tüm öğrencileri de en alt kısmda listeleyerek sunmaktadır. Belirtilen web dokümanının kodunu oluşturunuz.
*/



    session_start();

    if(!isset($_SESSION['sinif'])){
        $_SESSION['sinif']=array();
    }

    if(isset($_POST['ekle'])){
        $ad=$_POST['ad'];
        $soyad=$_POST['soyad'];

        $ogrenci=array(
            'ad'=> $ad,
            'soyad' => $soyad
        );

        $_SESSION['sinif'][]=$ogrenci;

    }
?>

<html>
<head>
</head>
<body>
        <form action="soru8.php" method="POST">
            Ad:<input type="text" name="ad">
            Soyad:<input type="text" name="soyad">
            <input type="submit" name="ekle" value="Ogrenci Ekle">
        </form>

        <?php if(count($_SESSION['sinif'])>0):
            $no=1;?>

            <table>
                <tr>
                    <th>NO</th>
                    <th>AD</th>
                    <th>SOYAD</th>
                </tr>
                <?php
                foreach($_SESSION['sinif'] as $ogrenci):
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $ogrenci['ad'];?></td>
                    <td><?php echo $ogrenci['soyad'];?></td>
                </tr>
                    <?php $no++;
                    endforeach;?>
            </table>   

        <?php endif; ?>


</body>
</html>