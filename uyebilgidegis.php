<?php
$gunceleposta=$_POST['inputEmail']; 
$guncelsifre=$_POST['inputPassword'];

$baglan=mysqli_connect("localhost","root","","cloudobs"); 

$uyeguncelle=mysqli_query($baglan, "UPDATE kullanici SET email='$gunceleposta', password='$guncelsifre'  WHERE 1 LIMIT 1");

$sonuc=mysqli_query($baglan,$uyeguncelle);

if ($uyeguncelle==0){
    echo "hata oluştu";
}else{
    echo "Bilgileriniz Güncellendi";
}

?> 
