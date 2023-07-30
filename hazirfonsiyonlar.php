<?php
//Hazır fonksiyonlar 
//"rand" belirlenen aralıkta sayı üretir
echo $sayi=rand(0,20); echo "<br>";

if ($sayi>=10) {
    echo "Kazandın";

} else {
    echo "Kaybettin";
}

/* Çift tırnak içerisinde değişken içerikleri okunabilir, 
tek tırnakta ise değişken içerikleri okunmaz.
*/
echo "<br>";
$ad= "Ali";
$soyad= "gns";

echo "Benim Adım $ad";
echo "<br>";
echo 'Benim Adım $ad';

/* 
yoksayma işaretleri
*/

echo "<br>"; echo "<br>";
echo "Ben $ad \"İstanbul\" Şehrini Çok Severim";

/*
Hazır string fonksiyonlar
*/

//strtolower => büyük metni ufak metne çevirir.
echo "<br>";
echo $yazi="BEN PHP DILINI OGRENIYORUM.";
echo "<br>";
echo $yazi=strtolower($yazi);

//strtoupper =>küçük metni büyük metne çevirir.
echo "<br>";
echo $yazi=strtoupper($yazi);
echo $yazi=strtolower($yazi); //=>ufak metne çevirir.

//ucwords => metnin kelimelerinin ilk harflerini büyük yazar.
echo "<br>";
echo $yazi=ucwords($yazi);
echo "<br>";
echo $yazi=strtolower($yazi); //=>ufak metne çevirir.

//ucfirst => metnin kelimelerinin ilk harflerini büyük yazar.
echo "<br>";
echo $yazi=ucfirst($yazi);

//strlen => metnin karakter sayısını verir.
/*
echo "<br>";
echo $yazi=strlen($yazi);
*/ 
//substr => metnin belirtilen karakter sayıda kısmını alır.

echo "<br>";
echo substr($yazi,0,15);
echo "<br>";

//devamını oku uygulaması
$yazi="Sandalye eve doğru yazın de ışık
dağılımı hesap makinesi koşuyorlar değerli olduğu iç
in duyulmamış koşuyorlar otobüs ona doğru duyulmamış. 
Sinema çobanın gidecekmiş layıkıyla un değirmeni koşuyorlar 
öyle ki bahar ekşili çorba öyle ki karşıdakine dışarı çıktılar. Çobanın adresini adresini 
mıknatıslı okuma sayfası beğendim gazete lakin cesurca yaptı dışarı çıktılar dışarı çıktılar
 şafak koyun karşıdakine. 
Çakıl ötekinden dolayı düşünüyor şafak mutlu oldular sıradanlıktan sandalye uzattı sıradanlıktan.
 Ötekinden dolayı tv tv salladı sıla lambadaki sıla sıla telefonu tel
efonu orta camisi sevindi de adanaya. Adresini teldek
i un değirmeni değerli olduğu için dergi gidecekmiş kap
ının kulu ekşili çorba gülüyorum anlamsız. Ötekinden dolayı 
un değirmeni gidecekmiş telefonu adanaya koşuyorlar 
adanaya kapının kulu batarya kutusu 
değerli olduğu için uzattı ötekinden dolayı sandalye. 
Nedirnedemek Türkçe Lorem İpsum.";

echo "<h1>Haber Başlığı</h1>";

echo "<p>".substr($yazi,0,250)."...</p>";

echo "<a href=\"#\">devamını oku</a>";


?>
