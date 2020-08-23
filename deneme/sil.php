<?php
error_reporting(0);
$baglan=mysql_connect("localhost","root","");
$db=mysql_select_db("topluluk");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<form method="post" action="" >
<input type="text" name="ad">ad<br>

<input type="text" name="id">url
<input type="submit" value="sil" name="sil"/>
</form>
<?php
$ad=$_POST['ad'];
   $url=$_POST['id'];
   if($_POST['ekle']){
   $yaz=mysql_query("delete from kat where k_id='".$url."' ");
   }
?>
</body>
</html>