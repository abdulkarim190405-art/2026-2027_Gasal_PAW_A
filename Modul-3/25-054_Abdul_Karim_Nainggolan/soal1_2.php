<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

// Menghapus satu data tertentu (Blueberry)
$data_hapus = "Blueberry";
$key = array_search($data_hapus, $fruits);

if ($key !== false) {
    unset($fruits[$key]);
    echo "Data $data_hapus dihapus.<br>";
}

// Menampilkan format array setelah data dihapus
echo 'fruits = ( "' . implode('", "', $fruits) . '" )<br>';

// Mendapatkan dan menampilkan nilai dengan indeks tertinggi
$indeks_tertinggi = max(array_keys($fruits));
echo "Nilai dengan indeks tertinggi: " . $fruits[$indeks_tertinggi];
?>