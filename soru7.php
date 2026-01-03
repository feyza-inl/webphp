<html>
<head>
</head>
<body>
    
    <?php for($i=0;$i<100;$i++):?>
        <img id='resim<?= $i ?>' src='resimk<?= $i ?>.jpg' onclick='resimdegistir(<?= $i ?>)'>
    <?php endfor; ?>
    <script type="text/javascript">
    // true = küçük, false = büyük
    var resimdurumu={};

    for(var i=0;i<100;i++){
        resimdurumu[i]=true;
    }
    
    function resimdegistir(numara){
        var resim = document.getElementById('resim'+numara);

        if(resimdurumu[numara]== true){
            resim.src = 'resim'+numara+'.jpg';
            resimdurumu[numara] = false;
        }
        else{
            resim.src = 'resimk'+numara+'.jpg';
            resimdurumu[numara]=true;
        }

    }

    </script>
    

</body>
</html>