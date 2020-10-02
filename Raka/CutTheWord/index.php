<?php
require('flag.php');

if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

if (isset($_GET['kata_kunci'])) {
    $jawaban_kamu               = $_GET['kata_kunci'];
    $kata_terlarang             = 'uictc_unibi';
    $jawaban_kamu_sebenarnya    = preg_replace("/$kata_terlarang/", '', $jawaban_kamu);

echo 'Jawaban Anda : '.$jawaban_kamu_sebenarnya.'<br><br>';

if ($jawaban_kamu_sebenarnya === $kata_terlarang) {
    ada_challenge_ada_flag();
}else{
    echo 'kata tidak cocok';
    die();
}
}
?>

<html>
<head>
<title>Cut The Word</title>
</head>
<body>
    <h2>Sambung menyambung menjadi kata, aku butuh kata</h2>
    <p>bingung? silahkan lihat source code.</p>
    <a href="?source" target="_blank">View Source</a>
</body>
</html>