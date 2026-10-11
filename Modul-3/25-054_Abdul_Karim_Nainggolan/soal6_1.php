<?php
// 1. array_push()
$arr1 = array("A");
echo 'Array awal: ("A")<br>';
array_push($arr1, "B");
echo "Hasil array_push: " . implode(" ", $arr1) . "<br><br>";

// 2. array_merge()
$arr2a = array("A", "B");
$arr2b = array("C");
echo 'Array awal: ("A", "B") digabung dengan ("C")<br>';
$merged = array_merge($arr2a, $arr2b);
echo "Hasil array_merge: " . implode(" ", $merged) . "<br><br>";

// 3. array_values()
$arr3 = array("x" => 1, "y" => 2);
echo 'Array awal: ("x" => 1, "y" => 2)<br>';
$values = array_values($arr3);
echo "Hasil array_values: " . implode(" ", $values) . "<br><br>";

// 4. array_search()
$arr4 = array("A", "B", "C");
echo 'Mencari "B" pada array: ("A", "B", "C")<br>';
$search_result = array_search("B", $arr4);
echo "Hasil array_search: " . $search_result . "<br><br>";

// 5. array_filter()
$arr5 = array(0, 1, false, 2, "", 3, "array");
echo 'Array awal: (0, 1, false, 2, "", 3, "array")<br>';
$filtered = array_filter($arr5);
echo "Hasil array_filter: " . implode(" ", $filtered) . "<br><br>";

// 6. Sorting Array Terindeks (sort & rsort)
$arr6 = array(3, 1, 2);
echo 'Array awal: (3, 1, 2)<br>';

$arr6_sort = $arr6;
sort($arr6_sort);
echo "Hasil sort: " . implode(" ", $arr6_sort) . "<br>";

$arr6_rsort = $arr6;
rsort($arr6_rsort);
echo "Hasil rsort: " . implode(" ", $arr6_rsort) . "<br><br>";

// 7. Sorting Array Asosiatif (asort, ksort, arsort, krsort)
$arr7 = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo 'Array awal: ("Peter"=>35, "Ben"=>37, "Joe"=>43)<br>';

function format_assoc($arr) {
    $str = "";
    foreach ($arr as $key => $val) {
        $str .= $key . "=> " . $val . ", ";
    }
    return $str;
}

$arr7_asort = $arr7;
asort($arr7_asort);
echo "Hasil asort: " . format_assoc($arr7_asort) . "<br>";

$arr7_ksort = $arr7;
ksort($arr7_ksort);
echo "Hasil ksort: " . format_assoc($arr7_ksort) . "<br>";

$arr7_arsort = $arr7;
arsort($arr7_arsort);
echo "Hasil arsort: " . format_assoc($arr7_arsort) . "<br>";

$arr7_krsort = $arr7;
krsort($arr7_krsort);
echo "Hasil krsort: " . format_assoc($arr7_krsort);
?>