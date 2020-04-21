<?php

$numara1=10;
$numara2=5;
$toplam= $numara1+$numara2;

echo $numara1."+".$numara2."=".$toplam;

echo "<br>";
echo sqrt(16); echo "<br>";
echo pow(4,2); 

echo"<br>";

$yazi= "benim adım furkan polat";
echo $yazi;
echo"<br>";
echo strlen(utf8_decode($yazi)); //karakter sayısınız veren fonksiyon
echo"<br>";
echo strstr($yazi,"adım");//belirtilen yeride dahil edip ondan sonrasını yazar
echo"<br>";
echo str_replace("adım","ismim",$yazi);// bul ve değiştir fonksiyonu
echo"<br>";
echo substr($yazi,10,20);
?>