<?php
// Deklarasi array multidimensi data awal
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

// Menampilkan Data awal
echo "Data awal:<br>";
echo "students = (<br>";
$rows = [];
foreach ($students as $student) {
    $rows[] = '&nbsp;&nbsp;("' . implode('", "', $student) . '")';
}
echo implode(",<br>", $rows) . "<br>)<br><br>";

// Menambahkan 5 data baru ke dalam array
array_push($students,
    array("Daniel", "220404", "0812345611"),
    array("Elena", "220405", "0812345622"),
    array("Fiona", "220406", "0812345633"),
    array("Gabe", "220407", "0812345644"),
    array("Hannah", "220408", "0812345655")
);

// Menampilkan Data setelah ditambah 5 data lain
echo "Data setelah ditambah 5 data lain:<br>";
echo "students = (<br>";
$rows = [];
foreach ($students as $student) {
    $rows[] = '&nbsp;&nbsp;("' . implode('", "', $student) . '")';
}
echo implode(",<br>", $rows) . "<br>)<br><br>";

// Menampilkan seluruh data dalam bentuk tabel HTML
echo "<table border='1' cellpadding='4' cellspacing='0'>";
echo "<tr>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
      </tr>";

foreach ($students as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>