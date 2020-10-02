<?php
require('flag.php');

if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

if (isset($_GET['password'])) {

    if($_GET['password'] == 0x0101){
        
        flag0();

    }elseif(md5($_GET['password']) == $_GET['password']) {
        
        flag1();

    }elseif(!true == $_GET['password']) {
        
        flag2();
    
    }
    else{
        echo 'Password Salah';
        die();
    }

}
?>


<html>
<head>
<title>Juggling The Ball</title>
</head>
<body>
    <h2>Pernahkah anda bermain bola? apakah anda tahu mengenai juggling? <br>ternyata PHP juga dapat melakukan <b>juggling</b> lhooo.</h2>
    <p>Source code tersedia dibawah ini</p>
    <a href="?source" target="_blank">View Source</a>
</body>
</html>