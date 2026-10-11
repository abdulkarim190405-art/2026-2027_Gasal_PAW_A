<?php
// Membuat array baru $weight dengan tiga data
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

// Menampilkan format array
$items = [];
foreach ($weight as $key => $val) {
    $items[] = '"' . $key . '"=>"' . $val . '"';
}
echo 'weight = (' . implode(', ', $items) . ')<br>';

// Mengambil dan menampilkan data kedua
$values = array_values($weight);
echo "Data kedua: " . $values[1];
?>