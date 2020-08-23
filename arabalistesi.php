<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
      <style type="text/css">
        #deneme {
    width: 250px;
    height: 100%;
    padding: 4px;
    background-color: #EDAFEB;
    position: fixed;
     }
     .resim{
        width: 100%;
        height: 200px;
        background-color: white;
     }
     .menu{
        width: 100%;
        height: 20px;
        font-size: 30px;
     }
     #deneme2{
       float: right;

        width: 1600px;
    height: 930px;
    padding: 4px;
    background-color: #EDAFEB;    
     }

     li a:hover{
background-color:#3C3741;
padding-left:15px;
}
#a {
list-style-type: none;
margin: 0;
padding: 0;
width: 100%;
}
#b {
display: block;
background-color:#D33257;
color:#E7E7E7;
height:50px;
line-height:50px;
text-decoration:none;
padding-left:10px;
}
       </style>
</head>
<body background="20220118_BULANIK6.jpg">
<?php 
 
include("ayar.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}

?>
<div id="deneme">
   
    <br><br>
    <br>
    <div class="menu">
    <ul id="a">
       <?php 
        $menusor=mysql_query("select * from menu");
        while ( $menucek=mysql_fetch_assoc($menusor)) { ?>
            <li><a href="<?php echo $menucek['url'] ?> " id="b"   ><?php echo $menucek['isim'] ?></a></li>
        
            
        <?php  }?>
        
        
            
    </ul>
</div>

</div>
<div style="clear: both"></div>
<div id="deneme2" style="font-size: 32px" >
    <center>
        <br><br>
    <?php 
   


@mysql_connect(“localhost”, ”root”, ”12345678”);
 

 
@mysql_select_db(“donem”);
  

$sira = 0;
while ($sira <1)

{

  $sorgu = mysql_query("select *from arabalistesi") ;
  $marka = mysql_result($sorgu, $sira, 'marka');
 $model = mysql_result($sorgu, $sira, 'model');
 $fiyat = mysql_result($sorgu, $sira, 'fiyat');
 
  echo "$marka   &emsp;&emsp; &emsp; &emsp; &emsp; &emsp;    $model  &emsp;&emsp; &emsp; &emsp; &emsp; &emsp;
  $fiyat" ;
  echo "<br>";
  $sira++;

}
 
 ?>
</center>


</div>

</body>

</html>
