<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Menambahkan 5 data baru ke dalam array
array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

// Menampilkan format array
echo 'fruits = ( "' . implode('", "', $fruits) . '" )<br>';

// Mendapatkan dan menampilkan nilai dengan indeks tertinggi
$indeks_tertinggi = max(array_keys($fruits));
echo "Nilai dengan indeks tertinggi: " . $fruits[$indeks_tertinggi];
?>