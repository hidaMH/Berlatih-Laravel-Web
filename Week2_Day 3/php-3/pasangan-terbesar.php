<?php
function pasangan_terbesar($angka){
// kode di sini
	$arrAngka = str_split($angka, 1);
    $temp = [];
    $result = "";
    for ($i = 0; $i < count($arrAngka) - 1; $i++) {
        if ($i == 0) {
            array_push($temp, (int)implode(array($arrAngka[$i], $arrAngka[$i + 1])));

        } else if ($temp[0] < (int)implode(array($arrAngka[$i], $arrAngka[$i + 1]))) {
            // array_replace($temp, array((int)implode(array($arrAngka[$i], $arrAngka[$i + 1]))));
            $temp[0] = (int)implode(array($arrAngka[$i], $arrAngka[$i + 1]));
        }
    }
    return $temp[0];
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>" . pasangan_terbesar(12783456); // 83
echo "<br>" . pasangan_terbesar(910233); // 91
echo "<br>" . pasangan_terbesar(71856421); // 85
echo "<br>" . pasangan_terbesar(79918293); // 99

?>