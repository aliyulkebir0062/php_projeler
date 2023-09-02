<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dizi İşlemleri</title>
</head>
<body>
    <h1>PHP Dizi İşlemleri</h1>

    <?php
    //Dizi oluşturma
    $dizi = array("---", "---", 10, 20, 30, 40);

    //Diziyi yazdırma
    echo "<strong>Dizi İçeriği:</strong><br>";
    print_r($dizi);
    echo "<br>";

    //Dizi elemanlarına erişim
    echo "<strong>Dizi Elemanlarına Erişim:</strong><br>";
    echo "İlk eleman: " . $dizi[0] . "<br>";
    echo "İkinci eleman: " . $dizi[1] . "<br>";
    echo "Üçüncü eleman: " . $dizi[2] . "<br>";
    echo "Dördüncü eleman: " . $dizi[3] . "<br>";
    echo "Beşinci eleman: " . $dizi[4] . "<br>";
    echo "Altıncı eleman: " . $dizi[5] . "<br>";

    echo "<br>";

    //Dizi sıralama işlemleri
    $sayilar = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);

    //Küçükten büyüğe sıralama
    echo "<strong>Küçükten Büyüğe Sıralama:</strong><br>";
    sort($sayilar);
    print_r($sayilar);
    echo "<br>";

    //Büyükten küçüğe sıralama
    echo "<strong>Büyükten Küçüğe Sıralama:</strong><br>";
    rsort($sayilar);
    print_r($sayilar);
    echo "<br>";

    //Alfabetik sıralama
    $harfler = array("a", "b", "c", "d");
    echo "<strong>Alfabetik Sıralama:</strong><br>";
    rsort($harfler);
    print_r($harfler);
    echo "<br>";

    //Değer kontrolü
    $aranan = "f";
    echo "<strong>Değer Kontrolü:</strong><br>";
    if (in_array($aranan, $harfler)) {
        echo "$aranan değeri bulundu.";
    } else {
        echo "$aranan değeri bulunamadı.";
    }

    echo "<br>";

    //Dizi elemanlarını birleştirme
    echo "<strong>Dizi Elemanlarını Birleştirme:</strong><br>";
    $birlesik = implode(", ", $harfler);
    echo "Birleşik dizi: " . $birlesik;

    //Metni belirli bir ayırıcıyla böleme
    $zaman = "00-00-0000 00:00";
    $zamanParcalari = explode(" ", $zaman);

    echo "<br>";
    echo "<strong>Zaman Bilgisi:</strong><br>";
    echo "Tarih: " . $zamanParcalari[0] . "<br>";
    echo "Saat: " . $zamanParcalari[1];
    ?>

</body>
</html>
