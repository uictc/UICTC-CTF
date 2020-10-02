<?php
if (isset($_POST['txt'])) {
    if ($_POST['txt'] == 'uictc-RK') {
        echo 'Respon : Belajar Base64, ubah dahulu ke base64 lalu kembali lagi !<br><br>';
    }elseif (base64_decode($_POST['txt']) == 'uictc-RK' ) {
        echo 'Respon : Eh ternyata harus diubah ke MD5<br><br>';
    }elseif ($_POST['txt'] == '82c740e5f4282ac5558e561af3979bee' ) {
        echo 'Respon : ..- .. -.-. - -.-. ..- -. .. -... .. ..--- ----- ..--- -----<br><br>';
    }elseif ($_POST['txt'] == '..- .. -.-. - -.-. ..- -. .. -... .. ..--- ----- ..--- -----' ) {
        echo 'Respon : Ubah terlebih dahulu kedalam tulisan, saya tidak bisa membacanya<br><br>';
    }elseif ($_POST['txt'] == 'UICTCUNIBI2020' ) {
        echo '!FLAG{B3lajaR_3nkrip51_h3h3h3}';
        die();
    }else{
        echo 'Respon : Salah<br><br>';
    }
}

?>

<head>
<title>Encryption</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="text" name="txt">
        <input type="submit" value="Dapatkan flag">
    </form>
    <p>bingung? silahkan lihat source code.</p>
    <script>
        var x = 'untuk ini contoh tapi tidak cari tahu untuK apa caRi tahu-';
        var y = x.substring(0,1);
            y = y + x.substring(6,7);
            y = y + x.substring(10,11);
            y = y + x.substring(17,18);
            y = y + x.substring(28,29);
            y = y + x.substring(57,58);
            y = y + x.substring(50,51);
            y = y + x.substring(42,43);
    </script>
</body>
</html>