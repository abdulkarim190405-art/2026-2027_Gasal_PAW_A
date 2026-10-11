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
echo 'height = (' . implode(', ', $items) . ')<br><br>';

// Menampilkan seluruh data menggunakan perulangan foreach
foreach ($height as $name => $value) {
    echo $name . " is " . $value . " cm tall.<br>";
}
?>