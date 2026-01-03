<?php

/* 
Kullanıcı adı ve şifre bilgilerinin girilebileceği bir form içeren "giris.php" isimli php dokümanını oluşturunuz. Bu dokümandaki form şifreyi doğru girenleri gerigiris.php sayfasına atar, ise kullanıcı ad ve şifre doğru ise "Giriş başarılı", 3 defa yanlış girilirse "Giriş reddedildi" şeklinde çıktı oluşturacaktır. Giriş deneme sayısı da her aşamada görüntülenecektir. Bu işlemin gerçekleştirilebileceği "bir.php" dosyasını COOKIE yapısını kullanarak oluşturunuz.
*/

    if(isset($_COOKIE["deneme_sayisi"])){
        $deneme = $_COOKIE["deneme_sayisi"];
    }
    else{
        $deneme=0;
    }

    if(isset($_POST["giris"])){
        $ad=$_POST["ad"];
        $sifre=$_POST["sifre"];


        $admin="Feyza";
        $adminsifre="12345";
        if($ad==$admin && $sifre==$adminsifre){
            setcookie("deneme_sayisi",0,time()-3600,"/");
            setcookie("giris_durumu","basarili",time()+60,"/");
            header("location:soru4_bir.php");
            exit;
        }
        else{
            $deneme++;

            if($deneme>=3){
                setcookie("deneme_sayisi",0,time()-3600,"/");
                setcookie("giris_durumu","reddedildi",time()+60,"/");
                header("location:soru4_bir.php");
                exit;

            }
            else{
                setcookie("deneme_sayisi",$deneme,time()+(86400*30),"/");
                header("location:soru4_giriş.php");
                exit;
            }
        }
    }
?>

<html>
<head>
   
</head>
<body>
    <?php if($deneme>0){
        echo (3-$deneme);
    }
    ?>
    <br>
    <br>
    <form action="" method="POST">
        Adınız:<input type="text" name="ad">
        Sifreniz:<input type="password" name="sifre">
        <input type="submit" name="giris" value="Giris Yap">
    </form>    


</body>
</html>