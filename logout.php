<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="20220118_BULANIK6.jpg">
<?php
session_start();
ob_start();
session_destroy();
echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>
</body>
</html>