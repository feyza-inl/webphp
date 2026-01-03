<?php
    $mesaj = "";

    if(isset($_COOKIE["giris_durumu"])){
        $durum = $_COOKIE["giris_durumu"];

        if($durum == "basarili"){
            $mesaj = "Giriş başarılı";
        }
        elseif($durum == "reddedildi"){
            $mesaj = "Giriş reddedildi";
        }

        // Cookie'yi temizle
        setcookie("giris_durumu","",time()-3600,"/");
    }
    else{
        // Eğer cookie yoksa giriş sayfasına yönlendir
        header("location:soru4_giriş.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Sonucu</title>
</head>
<body>
    <h2><?php echo $mesaj; ?></h2>
    <br>
    <a href="soru4_giriş.php">Giriş sayfasına dön</a>
</body>
</html>
