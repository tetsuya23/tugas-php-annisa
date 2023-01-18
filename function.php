<?php

function bangun_datar($panjang, $lebar){
    echo "Persegi";
    echo "<br>";
    $hasil = $panjang * $lebar;
    echo "$panjang * $lebar = $hasil";
}
bangun_datar(20, 30);
echo "<br><br>";

function lingkaran($jari, $luas){
    echo "Luas Lingkaran";
    echo "<br>";
    $hasil = $jari * $luas;
    echo "$jari * $luas = $hasil";
}
lingkaran(5, 3.14);
echo "<br><br>";

function bangun_ruang($p, $la, $t){
    echo "Limas";
    echo "<br>";
    $volume = $p * $la * $t;
    echo "$p * $la * $t = $volume";
}
bangun_ruang(1/3, 48, 16);
echo "<br><br>";

function br($l, $t){
    echo "Prisma";
    echo "<br>";
    $volum = $l * $t;
    echo "$l * $t = $volum";
}
br(50, 3);
echo "<br><br>";

function kel($s1, $s2, $s3, $s4){
    echo "Trapesium";
    echo "<br>";
    $keliling = $s1 + $s2 + $s3 + $s4;
    echo "$s1 + $s2 + $s3 + $s4 = $keliling";
}
kel(15, 15, 15, 15);
echo "<br><br>";
?>