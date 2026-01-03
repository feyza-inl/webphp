<?php

    session_start();

    if(isset($_POST["tamam"])){
        $_SESSION['sepet'] = array();
        header("location:soru2_sayfa1.php");
        exit;
    }

    $sepet=array();
    $toplam = 0;

    if(isset($_SESSION['sepet'])){
        $sepet = $_SESSION['sepet'];


        foreach($sepet as $urun){
            $toplam+=$urun["adet"]*$urun["fiyat"];
        }
    }
?>

<html>

<head>

</head>
<body>

<table border="2">
    <tr>
        <th>Urun Adi</th>
        <th>Adet</th>
        <th>Fiyat</th>
        <th>Toplam</th>
    </tr>
    <?php foreach($sepet as $urun):
        $satirToplam = $urun['adet']*$urun['fiyat']?>
    <tr>
        <td><?php echo $urun['adi'] ?></td>
        <td><?php echo $urun['adet'] ?></td>
        <td><?php echo $urun['fiyat'] ?></td>
        <td><?php echo $satirToplam ?></td>
    </tr>
        <?php endforeach; ?>
    <tr>
        <td colspan="3" align="right"><strong>Genel Toplam:</strong></td>
        <td><strong><?php echo $toplam ?></strong></td>
    </tr>

    <form action="soru2_sayfa1.php" method="POST">
        <input type="submit" name="tamam" value="Temizle">
    </form>
</table>





</body>
</html>