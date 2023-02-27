<?php

$animals = ['Macan', 'Kucing', 'Beruang', 'Ayam'];

// menambahkan data ke array
array_push($animals, "kambing");

// Meengakses array index
echo $animals[2];

// array Assosiatif
$animal = [
    'nama' => $animals[1],
    'jenis' => 'Karnivora',
    'usia' => "3 bulan"
];

// Mengakses array assosiatif
echo $animal ['nama']