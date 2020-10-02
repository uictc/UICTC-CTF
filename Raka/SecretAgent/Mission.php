<?php
require('flag.php');

if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

if(strlen(strstr($_SERVER['HTTP_USER_AGENT'],"Agent007-JamesBond")) <= 0 ){
    echo '<h1>Siapa anda ? anda tidak bisa masuk!, anda bukan agen rahasia kami!</h1>';
    echo 'Identitas Anda : '.$_SERVER['HTTP_USER_AGENT'];
}else{
    flag();
}
?>

<br><br><a href="?source" target="_blank">View Source</a>