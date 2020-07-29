<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
	<h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
  		*/

        // Lakukan Looping Di Sini
		echo "LOOPING PERTAMA" . "<br>";
		$i = 2;
		while ($i <= 20) {
			echo "$i - I Love PHP" . "<br>";
			$i+=2;
		}
		echo "<br>" . "LOOPING KEDUA";
		$j = 20;
		while ($j >= 2) {
			echo "<br>" . "$j - I Love PHP";
			$j-=2;
		}

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */
        $numbers = [18, 45, 29, 61, 47, 34];
        echo "Array numbers:" . "<br>";
        echo "<pre>";
        print_r ($numbers);
        echo "</pre>";

        // Lakukan Looping di sini
        echo "Array sisa baginya adalah:  ";
        $pembagi = 5;
        for ($i=0; $i < count($numbers) ; $i++) { 
        	$rest = $numbers[$i] % $pembagi;
	        echo "<pre>";
	        echo $numbers[$i] . " dibagi " . $pembagi . " sisanya " . $rest; 
	        echo "</pre>";
        }
        
        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        // Output: 
        $newitems = [];
        foreach ($items as $key => $item) {
        	$newitems[] = [
        		"id" => $item[0],
        		"name" => $item[1],
        		"price" => $item[2],
        		"capt" => $item[3],
        		"img" => $item[4]
        	];
        }
        echo "<pre>";
        print_r ($newitems);
        echo "</pre>";

        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";

        for( $a=5; $a>0; $a--){
    		for($b=6; $b>$a; $b--){
        		echo "*";
    	}echo"<br>";
}     
    ?>
</body>
</html>