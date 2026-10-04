<?php

// mata kuliah
$matkul = array(
    "PTI",
    "ALPRO",
    "DPW",
    "STRUKDAT",
    "JARKOM",
    "PAW",
    "PSBF",
    "RPL"
);

// mata kuliah yang termasuk praktikum
$praktikum = array(
    "JARKOM",
    "PAW"
);
for ($i = 0; $i < count($matkul); $i++) {

    if ($i < 4) {

        echo "Saya sudah mengambil matkul " . $matkul[$i] . " semester lalu";
        echo "<br>";

    // Jika mata kuliah termasuk praktikum
    } elseif ($matkul[$i] == "JARKOM" || $matkul[$i] == "PAW") {

        echo "Saya sedang mengambil matkul " . $matkul[$i] . " termasuk praktikum nya";
        echo "<br>";

    } elseif ($i == 6 || $i == 7) {

        echo "Saya belum mengambil matkul " . $matkul[$i];
        echo "<br>";

    // Jika kondisi lainnya
    } else {

        echo "Saya sudah mengambil matkul " . $matkul[$i] . " semester lalu";
        echo "<br>";
    }
}

?>