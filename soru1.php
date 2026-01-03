<?php
/*
Resimleri resim1, resim2, ... resim10 şeklinde verilmiş 10 adet resmin mevcut olduğunu kabul ediniz.
Oluşturmanız gereken ekran:

Buton - Resim - Buton şeklinde görüntülenecek
Sol butona tıklanınca bir önceki resim olarak bir resim görüntülenecek
Sağdaki butona tıklanınca bir sonraki resim görüntülenecek
Bu yapı döngüsel olarak çalışacak:

1. resim görüntülenirken sola basılırsa 10. resim
10. resim görüntülenirken sağa basılırsa 1. resim görüntülenecek
Bu yapıyı oluşturan dokümanın JavaScript/HTML kodunu yazınız.
*/ 
    if(isset($_GET["min"]) && isset($_GET["max"])){
        $min=$_GET["min"];
        $max=$_GET["max"];
    } else {
        $min = 1;
        $max = 10;
    }
?>
<html>
<head>
</head>
<body>

<form action="soru1.php" method="GET">
<input type="text" name="min">
<input type="text" name="max">
<input type="submit" value="Resim Sayisi Al">
</form>

<div id="resim">Resim 1</div>
<div id="sayac">1/10</div>
<button id="sag">Sag</button>
<button id="sol">Sol</button>

<script type="text/Javascript">
    var i = <?php echo $min; ?>;
    var min = <?php echo $min; ?>;
    var max = <?php echo $max; ?>;
    var resim = document.getElementById("resim");
    var sayac = document.getElementById("sayac");
    var sagbuton = document.getElementById("sag");
    var solbuton = document.getElementById("sol");

    function resmidegistir(){
        resim.innerHTML = "Resim "+i;
        sayac.innerHTML = i+" / "+max;
    }

    sagbuton.onclick = function(){
        i++;
        if(i>max){
            i=min;
        }
        resmidegistir();
    }
    solbuton.onclick = function(){
        i--;
        if(i<min){
            i=max;
        }
        resmidegistir();
    }
    resmidegistir();
</script>
</body>
</html>
