<?php
$eposta= $_POST['inputEmail'];
$sifre= $_POST['inputPassword'];

$baglan=mysqli_connect("localhost","root","","cloudobs"); 

$kayitekle="INSERT INTO kullanici(email,password) VALUES ('$eposta','$sifre')";

$sonuc=mysqli_query($baglan,$kayitekle);

if ($sonuc==0){
     echo "Eklenemedi, kontrol ediniz";
}else{
	
     header("Location:uyekontrol.php");
}
?>