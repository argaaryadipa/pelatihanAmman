<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 PHP</title>
</head>
<body>
    <h1>Belajar Menjalankan kode HTML dan PHP dengan Xampp</h1>
    <?php
    // Latihan penerapan PHP
    echo "Ini text berasal dari kode PHP";
    // Latihan penerapan HTML ke PHP
    echo "<ol>";
    echo "<li>List Pertama</li>";
    echo "<li>List Kedua</li>";
    echo "<li>List Ketiga</li>";
    echo "</ol>";
    
    // Latihan Variable pada PHP
    $nama = "Arga";
    $umur = 22;
    $alamat = "Sumbawa";
    
    echo "Nama : " . $nama . "<br>";
    echo "Umur : " . $umur . "<br>";
    echo "Alamat : " . $alamat . "<br>";
    echo "<br>";

    // Latihan tipe data pada PHP
    $number = 1234567890;
    $string = "Hola, ini tipe data string";
    $booleanTrue = true;
    $booleanFalse = false;

    echo "Ini tipe data number " . $number . "<br>";
    echo "Ini tipe data sting " . $string . "<br>";
    echo "Ini tipe data boolean true " . $booleanTrue . "<br>";
    echo "Ini tipe data boolean false " . $booleanFalse . "<br>"; 
    ?>
</body>
</html>

