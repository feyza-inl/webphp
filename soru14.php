<?php

if(isset($_POST['sifirla'])){
    setcookie("ziyaret_sayisi",0,time()-3600,"/");
    header("location:soru14.php");
    exit;
}

    $ziyaret=0;
    $mesaj="";

    if(isset($_COOKIE['ziyaret_sayisi'])){
        $ziyaret=$_COOKIE['ziyaret_sayisi'];
        $ziyaret++;
        $mesaj = "Bu sayfayı ".$ziyaret." kez ziyaret ettiniz.";
    }
    else{
        $ziyaret =1;
        $mesaj="Hosgeldiniz!";
    }

        setcookie("ziyaret_sayisi",$ziyaret,time()+(86400*30),"/")
?>

<html>
<head>
</head>
<body>
    <h2><?php echo $mesaj ?></h2>
    
    <br>
    <form action="" method="POST">
        <input type="submit" name="sifirla" value="Sayacı Sıfırla">
    </form>
</body>
</html>