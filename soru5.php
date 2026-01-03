<?php

/*
192.168.1.1 adresinde çalıştığı ve root kullanıcısının şifresinin abc olduğu kabul edilen DENEME isimli veri tabanında link bilgilerini tutan LINKLER(LinkID, hrefText, contextText) isimli bir tablo bulunmaktadır. Bu tablo tabanında link bilgilerini tutan LINKLER tablosunun tüm satırlarını ekrana yazacak (içerikte resim – metin birlikte gösterilecek) bir web dokümanında alt alta oluşturan kullanılarak ilgili linkleri (içerikte resim – metin birlikte gösterilecek) bir web dokümanında alt alta oluşturan php/html kodunu yazınız.
*/

$serveradi="192.168.1.1";
$kullaniciadi="root";
$sifre="abc";
$veritabaniadi="DENEME";

$baglan=mysqli_connect($serveradi,$kullaniciadi,$sifre,$veritabaniadi);

if(!$baglan){
    die("Baglanti hatasi".mysqli_connect_error());
}

$sorgu = "SELECT LinkID,hrefText,contextText FROM LINKLER";

$result = mysqli_query($baglan,$sorgu);
?>

<html>
    <head>
    </head>
    <body>
        <?php
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                $linkID=$row['LinkID'];
                $hrefText=$row["hrefText"];
                $contextText = $row['contextText'];

                echo '<a href="'.$hrefText.'">'.$contextText.'</a>';
                echo "<br><br>";
            }
        }
        mysqli_close($baglan);

        ?>
    </body>
</html>