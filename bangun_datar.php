<!DOCTYPE html>
<html>

<head>
	<title>
		Bangun Datar
	</title>
</head>

<body>
	<?php
        $panjang = 20;
        $lebar = 10;
        $luas = ($panjang*$lebar);
        print ("LUAS = $luas");

        echo "<hr>";

        echo "\t=== Program Menghitung Luas Lingkaran Dengan PHP ===\n\n";
        $jari = 5;        // variable jari berisi nilai jari-jari
        $luas = 3.14 * $jari * $jari; //variable rumus perhitungan
       
        echo "\tHasilnya adalah : ".$luas;  //hasil perhitungan
        echo "<hr>";

        echo "Kode Program PHP - Keliling dan Luas Persegi Panjang";
  echo "<hr>";
 
  $panjang = 7.5;
  $lebar = 9.25;
 
  $keliling_persegi_panjang = (2 * $panjang) + (2 * $lebar); 
  $luas_persegi_panjang = $panjang * $lebar;
 
  echo "Panjang persegi = $panjang <br>";
  echo "Lebar persegi = $lebar <br>";
 
  echo "<br>";
 
  echo "Keliling persegi panjang = (2 * $panjang) + (2 * $lebar) 
        = $keliling_persegi_panjang <br>";
 
  echo "Luas persegi panjang = $panjang * $lebar
        = $luas_persegi_panjang <br>";
        echo "<hr>";

        $la = 50;
 $t = 3;
 $volume = $la*$t;
 echo " <b>Rumus Menghitung Volume Prisma</b><br>";
 echo " Rumus Volume : V = Luas Alas x Tinggi<br><br>";
 echo " Luas Alas : $la cm<br>";
 echo " Tinggi : $t cm<br>"; 
 echo " V = $la x $t  <br>";
 echo " Hasil Volume nya adalah : $volume ";
        ?>
</body>

</html>
