<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// Menambahkan 5 data baru ke dalam array menggunakan perulangan for
for ($i = 1; $i <= 5; $i++) {
    $fruits[] = "Buah Tambahan " . $i;
}

// Menghitung ulang panjang array setelah penambahan data
$arrlength = count($fruits);

// Menampilkan panjang array saat ini
echo "Panjang array saat ini: " . $arrlength . "<br><br>";

// Menampilkan seluruh data array
for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
?>