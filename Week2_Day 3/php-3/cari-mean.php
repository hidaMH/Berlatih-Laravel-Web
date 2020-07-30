<<<<<<< HEAD
<?php

function cari_mean($arr){
//kode di sini
	$jumlah = array_sum($arr);
  	$panjang = count($arr);
  	return round($jumlah/$panjang) . "<br>";
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>
=======
<?php

function cari_mean($arr){
//kode di sini
  $jumlah = array_sum($arr);
  $panjang = count($arr);
  return round($jumlah/$panjang) . "<br>";
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>


>>>>>>> ef496ad59afe1231beb8a6a99734e5b8de1e4513
