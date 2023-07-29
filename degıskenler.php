<?php
//String türünde bir değişken örneği
$isim = "Ali Yülkebir";
echo "Merhaba, benim adım " . $isim . ".<br>";

//Sayı türünde bir değişken örneği
$yas = ;
echo "Yaşım: " . $yas . "<br>";

//Boolean türünde bir değişken örneği
$dogruMu = true;
echo "Doğru mu? " . ($dogruMu ? "Evet" : "Hayır") . "<br>";

//Dizi (array) türünde bir değişken örneği
$renkler = array("Kırmızı", "Mavi", "Yeşil");
echo "Favori renklerim: " . $renkler[0] . ", " . $renkler[1] . ", " . $renkler[2] . "<br>";

//Değişken değerini değiştirme
$degisken = "Merhaba";
echo $degisken . "<br>"; //"Merhaba" yazdırır
$degisken = "Selam";
echo $degisken . "<br>"; //"Selam" yazdırır
?>
