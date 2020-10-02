<?php
require('flag.php');

if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

if (isset($_GET['id'])){
    if (preg_match("/administrator/",$_GET['id'])) {echo 'gunakan cara lain untuk menulis "administrator", kami tidak membutuhkan plaintext'; exit();}
    $_GET['id'] = urldecode($_GET['id']);
    if ($_GET['id'] == 'administrator') {
        flag();
    }
}
?>

<html>
<head>
<title>Decode</title>
</head>
<body>
    <h2>Untuk mendapatkan flagnya, kamu harus menggunakan id sebagai 'administrator'</h2>
    <a href="?source" target="_blank">View Source</a>
</body>
</html>