<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        echo "<h4>LOOPING PERTAMA</h4>";
        
        // menggunakan while 
        $x = 2;

        while($x <= 20) {
          echo "$x - I Love PHP<br>";
          $x++;
        } 
       
        echo "<h4>LOOPING KEDUA</h4>";
        $x = 20;

        while($x >= 2) {
          echo "$x - I Love PHP<br>";
          $x-=1;
        } 
       


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        $rest = array();
        foreach ($numbers as $number) {
            $rest[]=$number % 5;
        }
        echo "<br>";
        echo "Array sisa baginya adalah: ";
        print_r($rest);
        echo "<br>";



        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
            Setiap item memiliki key yaitu : id, name, price, description, source. 
            
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

         // Output :
         foreach($items as $item) {
         $itemAssoc=[
            'id'=> $item[0],
            'name'=> $item[1],
            'price'=> $item[2],
            'description'=> $item[3],
            'source'=> $item[4],
         ];
         print_r ($itemAssoc);
         echo "<br>";
        };
         
        
        
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

    
        $tinggi_segitiga = 5;
        for($i=$tinggi_segitiga;$i>0;$i--) {
        for($j=$tinggi_segitiga;$j>=$i;$j--) {
        echo " *";
        }
        echo "<br>";
        }

    ?>

</body>
</html>