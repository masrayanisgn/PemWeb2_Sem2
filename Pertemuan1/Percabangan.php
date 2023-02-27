<?php
$jam = 8;

echo "saat ini pukul: $jam <br>";

$hasil = $jam <12;

if ($jam < 12) {
    echo "Selamat Pagi!";
} elseif ($jam < 18) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}