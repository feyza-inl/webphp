<?php
    session_start();

    $sepet = array();
    $genel_toplam=0;

    if(isset($_SESSION["sepet"])){
        $sepet=$_SESSION["sepet"];
    

    foreach($sepet as $urun){
        $genel_toplam+=(float)$urun['fiyat']*(int)$urun['adet'];
    }
}

?>
<html>
<head>
</head>
<body>
    <?php
    if(count($sepet)>0): 
    ?>
    <table>
        <tr>
            <th>Sira</th>
            <th>Urun Adi</th>
            <th>Fiyat</th>
            <th>Toplam(TL)</th>
        </tr>
<?php $sira=1;
foreach($sepet as $urun):
    $urun_toplam=(float)$urun['fiyat']*(int)$urun['adet'];
?>
    <tr>
        <td><?php echo $sira ?> </td>
        <td><?php echo $urun['urun'] ?> </td>
        <td><?php echo $urun['fiyat'] ?> </td>
        <td><?php echo $urun_toplam ?> </td>

    </tr>
<?php endforeach;?>
<?php endif; ?>
    </table>
</body>
</html>