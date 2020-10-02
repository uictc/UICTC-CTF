<?php 

//var_dump($_COOKIE['bomb']);

$thn_skrg   = date("Ymd");
$thn_cookie = $_COOKIE['time'];

if ($thn_cookie >= $thn_skrg) {
    echo '<center><h1>Perang terjadi, kamu gagal menyelamatkan dunia!</h1><br><br>';
    echo '<img src="worldwar.jpg"></center>';
}else{
    echo '<center><h1>Perang berhasil dihentikan!</h1><center><br>';
    echo '<center>Selamat pejuang!, ini penghargaan bagi kamu !Flag{W3b4ckInT1me}<center>';
}

?>