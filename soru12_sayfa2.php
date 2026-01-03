<?php

session_start();

if(isset($_SESSION['kullanici']))
    $kullanicilar=$_SESSION['kullanici'];
?>


<html>
<head>
</head>
<body>
        <table border="3" id="table">
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Email</th>
                <th>Sehir</th>
            </tr>
            <?php  foreach($kullanicilar as $kulancanim): ?>
            <tr>
                <td><?php echo $kulancanim['ad']  ?></td>
                <td><?php echo $kulancanim['soyad']  ?></td>
                <td><?php echo $kulancanim['email']  ?></td>
                <td><?php echo $kulancanim['sehir']  ?></td>
            </tr>
                <?php endforeach; ?>
        </table>

        <form method="POST" action="">
        <button type="submit" name="sil">Tümünü Sil</button>
        </form>

        </script>
</body>
</html>