<?php

// perulangan for
echo "<b>Perulangan for</b>";
echo "<br>";
for ($i=0; $i < 10; $i++) { 
    echo "ini tulisan ke " . $i;
    echo "<br>";
} 
echo "<br>";

// perulangan bintang dari kiri cara pertama
echo "<b>Perulangan bintang dari kiri cara pertama</b>";
echo "<br>";
$bintang = 10; //jumlah baris segitiga
for ($i = 1; $i <= $bintang; $i++) { // dimulai dari 1 dan akan terus ditambah tapi tidak lebih dari nilai $bintang
    for ($j = 1; $j <= $i; $j++) { // dimulai dari 1 tapi nilai $j tidak lebih dari nilai $i dan akan terus ditmbah
        echo "*"; // print *
    }
    echo "<br>"; // baris baru
} echo "<br>";

// perulangan bintang dari kiri cara kedua
echo "<b>Perulangan bintang dari kiri cara kedua</b>";
echo "<br>";
$star = 10;
for ($i = $star; $i > 0; $i--) { 
    for ($j = $star; $j >= $i; $j--) { 
        echo "*";
    }
    echo "<br>";
} echo "<br>";

// perulangan bintang dari kanan
echo "<b>Perulangan bintang dari kanan</b>";
echo "<br>";
$bintang = 10;
for ($i = $bintang; $i > 0; $i--) { 
    for ($j = 1; $j <= $i; $j++) { 
        echo " &nbsp"; // non breaking space, menambahkan spasi atau ruang
    }
    for ($k = $bintang; $k >= $i; $k--) { 
        echo "*";
    }
    echo "<br>";
}

?>