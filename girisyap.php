<?php
require("giriskontrol.php");
$eposta=$_POST["inputEmail"];
$sifre=$_POST["inputPassword"];
$sorgula=mysqli_query($baglan, " SELECT * from kullanici WHERE email='".$eposta."' AND password='".$sifre."'");
if(mysqli_num_rows($sorgula)>0){
    while($row=mysqli_fetch_assoc($sorgula)){
		

        header("Location:dashboard.php");
    }
}else{
    echo " Sorgu gerçekleşmedi";
}
?>