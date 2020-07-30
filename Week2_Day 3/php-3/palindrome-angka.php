<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	if ($angka >= 0 && $angka < 9) {
        return $angka+1;
    } else {
        for($i=$angka+1; $i<=1000000; $i++) {
            if ($i == (int)strrev(implode(str_split(strval($i), 1)))) {
                return $i;
            } 
        }
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>" . palindrome_angka(10); // 11
echo "<br>" . palindrome_angka(117); // 121
echo "<br>" . palindrome_angka(175); // 181
echo "<br>" . palindrome_angka(1000); // 1001

?>