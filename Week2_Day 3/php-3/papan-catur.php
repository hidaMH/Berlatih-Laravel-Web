<<<<<<< HEAD
<?php

function papan_catur($angka) {
// tulis kode di sini
	$catur = "";
    for ($i = 0; $i < $angka; $i++) {
        if ($i%2 == 0 ) {
            $catur .= "".str_repeat("# ", $angka) ."\n";
        } else {
            $catur .= str_repeat(" #", $angka-1)."\n";
        }
    }
    return $catur;
}

// TEST CASES
echo papan_catur(4) ;
echo "<br>";
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
echo "<br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
echo "<br";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
=======
<?php

function papan_catur($angka) {
// tulis kode di sini
 $catur = "";
    for ($i = 0; $i < $angka; $i++) {
        if ($i%2 == 0 ) {
            $catur .= "".str_repeat("# ", $angka) ."\n";
        } else {
            $catur .= str_repeat(" #", $angka-1)."\n";
        }
    }
    return $catur;
}

// TEST CASES
echo papan_catur(4) 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
>>>>>>> ef496ad59afe1231beb8a6a99734e5b8de1e4513
