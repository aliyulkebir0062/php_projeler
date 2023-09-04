<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //POST isteğini işleme

    //Post'tan sayıyı alma
    $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

    if ($number >= 0) {
        //Faktöriyel hesaplama işlemi
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i;
        }

        echo "Sonuç: $result";
    } else {
        echo "Geçersiz sayı";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //GET isteğini işleme
    echo "Faktöriyel hesaplamak için bir sayı girin.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Faktöriyel Hesaplama Örneği</title>
</head>
<body>
    <form method="POST">
        <label for="number">Bir sayı girin:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Hesapla</button>
    </form>
</body>
</html>
