<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

// Menambahkan 5 data baru ke dalam array $height
$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

// Menampilkan format array
$items = [];
foreach ($height as $key => $val) {
    $items[] = '"' . $key . '"=>"' . $val . '"';
}
echo 'height = (' . implode(', ', $items) . ')<br>';

// Menampilkan nilai dengan indeks terakhir
echo "Nilai dengan indeks terakhir: " . end($height) . "<br><br>";

// Menghapus satu data tertentu (Barry)
unset($height["Barry"]);

// Menampilkan format array setelah data dihapus
$items = [];
foreach ($height as $key => $val) {
    $items[] = '"' . $key . '"=>"' . $val . '"';
}
echo 'height = (' . implode(', ', $items) . ')<br>';

// Menampilkan kembali nilai dengan indeks terakhir
echo "Nilai dengan indeks terakhir setelah dihapus: " . end($height);
?>