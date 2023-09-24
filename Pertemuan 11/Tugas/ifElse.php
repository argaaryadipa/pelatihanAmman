<?php

// if else statement

$nilai = 10;
$absen = 2;

if ($nilai >= 7 && $absen >= 5) {
    echo "Anda lulus";
} elseif ($nilai == 5 && $absen == 3){
    echo "Anda diambang kelulusan";
}  else {
    echo "Anda tidak lulus";
}
?>