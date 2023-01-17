<?php

$array = file_get_contents('data.json');
$data = json_decode($array, true);
   
foreach ($data as $key => $value) {
    echo "nama : ".$value['nama'].", kelas : ".$value['kelas'].", alamat : ".$value['alamat'].", tanggal_lahir : ".$value['tanggal_lahir'].", nilai : ".$value['nilai'];
    echo "<br>";
}
?>