<?php
setcookie ("time", '15/Jan/2000', time()+3600*24*(1), '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back In Time</title>
</head>
<body>
    <center>Kamu sekarang ada di masa lalu, kamu datang ke masa lalu untuk menghentikan perang dunia ke-3 dan kamu sedang berada di masa lalu<br>
            perang dunia ke-3 akan terhenti jika kamu dapat kembali ke masa depan, tetapi ada masalah,<br> 
            alat untuk mengubah waktu pada mesin waktu kamu rusak<br>
            jadi kamu tidak dapat kembali ke masa depan dan jika kamu tidak kembali ke masa depan maka perang dunia ke-3 akan terjadi,<br>
            gunakan cara lain untuk mengubah waktu, agar kamu dapat kembali ke masa depan<br><br>
        <?= '<b>Kamu harus kembali ke tanggal : '.date('d/M/Y').'</b>'?><br><br><br>
        <form action="./flag.php">
            <input type="submit" value="Perbaiki Mesin !">
        </form>
    </center>
</body>
</html>