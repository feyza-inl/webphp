<?php

$serveradi="localhost";
$kullaniciadi="root";
$sifre="12345";
$veritabaniadi="OKUL";


$baglan=mysqli_connect($serveradi,$kullaniciadi,$sifre,$veritabaniadi);

if(!$baglan){
    die("Baglanti hatasi: ".mysqli_connect_error());
}

$sorgu="SELECT OgrenciID, Ad, Vize, Final FROM NOTLAR";
$result = mysqli_query($baglan,$sorgu);

$toplam_ortalama=0;
$ogrenci_sayisi=0;
?>

<html>
<head>
</head>
<body>
    
    <?php if(mysqli_num_rows($result) > 0):?>

        <table>
            <tr>
                <th>ID</th>
                <th>Ad</th>
                <th>Vize</th>
                <th>Final</th>
                <th>Ortalama</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)):
            $id=$row['OgrenciID'];
            $ad=$row['Ad'];
            $vize=$row['Vize'];
            $final=$row['Final'];

            $ortalama = ($vize*0.40)+($final*0.6);

            $toplam_ortalama+=$ortalama;
            $ogrenci_sayisi++;?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $ad ?></td>
                <td><?php echo $vize ?></td>
                <td><?php echo $final ?></td>
            </tr>
            <?php endwhile; ?>


        </table>
    <?php endif;?>    

    <?php mysqli_close($baglan) ?>
</body>
</html>