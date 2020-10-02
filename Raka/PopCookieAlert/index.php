<?php 
if (strpos($_GET['x'], 'cookie') !== false) {
    setcookie ("flag", 'S1mpl3T3stBu9Xss', time()+3600*24*(1), '/');
}
echo $_GET['x'];
?>
<html>
<head>
<title>Pop Cookie Alert</title>
</head>
<body>
    <h2>Untuk mendapatkan flagnya, kamu harus menampilkan cookie menggunakan alert</h2>
</body>
</html>
<!-- <script>
document.cookie = "flag=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
</script> -->
