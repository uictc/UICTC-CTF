<?php
require('flag.php');

if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

extract($_GET);
echo (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'true') ? flag() : 'session not admin' ;

?>

<head>
<title>Extraction</title>
</head>
<body>
    <h2>Halaman ini membutuhkan akses admin, ada belum memiliki session untuk masuk halaman ini!</h2>
    <p>bingung? silahkan lihat source code.</p>
    <a href="?source" target="_blank">View Source</a>
</body>
</html>