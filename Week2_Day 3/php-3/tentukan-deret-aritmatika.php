<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	$sum = array_sum($arr);
    $a = $arr[0];
    $b = $arr[1] - $arr[0];
    $len = count($arr);
    $sumArimatik = $len / 2 * (2 * $a + ($b * $len) - $b);
    $result = "";

    for ($i = 1; $i < count($arr); $i++) {
        if ($sum == $sumArimatik && ($arr[$i] - $arr[$i-1] == $b)) {
            $result = "TRUE";
        } else {
            $result = "FALSE";
        }
    }
    return $result;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>" . tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>" . tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>" . tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>" . tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>