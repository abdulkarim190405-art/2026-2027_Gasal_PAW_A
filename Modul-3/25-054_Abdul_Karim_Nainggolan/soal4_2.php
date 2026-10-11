<?php
// Membuat array baru $weight dengan tiga buah data
$weight = array("Andy"=>"70", "Barry"=>"65", "Charlie"=>"75");

// Menampilkan format array
$items = [];
foreach ($weight as $key => $val) {
    $items[] = '"' . $key . '"=>"' . $val . '"';
}
echo 'weight = (' . implode(', ', $items) . ')<br><br>';

// Mengakses seluruh data array asosiatif menggunakan perulangan FOR
$keys = array_keys($weight);
$length = count($keys);

for ($i = 0; $i < $length; $i++) {
    $name = $keys[$i];
    echo $name . " is " . $weight[$name] . " kg.<br>";
}
?>