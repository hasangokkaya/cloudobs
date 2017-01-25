<?php
$baglan=mysqli_connect("localhost","root","","cloudobs");
if($baglan){
    echo "baglanti kuruldu";
}else{
    echo "baglanti basarisiz oldu";
}
?>