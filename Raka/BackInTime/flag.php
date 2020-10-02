<?php
if(isset($_COOKIE["time"])){ 
    if ($_COOKIE["time"] == date('d/M/Y')) {
        echo 'Selamat, Pejuang! Ternyata anda benar-benar menghentikan perang duna ke-3<br>';
        echo '!flag{dcz-C00k1e-M4st3Rz}';
        die();
    }else {
        echo "<center><h1>Maaf anda gagal, perang dunia ke-3 tidak dapat dihindarkan!</h1></center>";
        setcookie ("time", '15/Jan/2000', time()+3600*24*(1), '/');
    }
} else{ 
    echo "<center><h1>Maaf anda gagal, perang dunia ke-3 tidak dapat dihindarkan!</h1></center>"; 
    setcookie ("time", '15/Jan/2000', time()+3600*24*(1), '/');
} 
?>

<center><img src="./worldwar.jpg" alt=""></center>