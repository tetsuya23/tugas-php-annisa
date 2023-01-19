<?php
include_once("koneksi.php");
$pembeli= mysqli_query($mysqli, "SELECT pembeli.*, nm_pembeli, almt, no_hp, idobat, status FROM pembeli
                         JOIN obat ON pembeli.idobat = obat.id 
                         JOIN transaksi ON pembeli.id_pembeli = transaksi.id
                         ORDER BY transaksi ASC");

?>

<html>
    <head>
        <title> CRUD PHP </title>
    </head>
    <body>
        <center>
            <a href="index.php">Obat</a> |
            <a href="index.php">Pembeli</a> |
            <a href="index.php">Dokter</a> |
            <a href="index.php">Petugas</a> |
            <a href="index.php">Detail</a> |
            <a href="index.php">Transaksi</a>
            <hr>
        </center>

        <a href="add.php">Add Menu Pembeli</a><hr/></hr>

            <table class="table" width='80%' border=1>
                <tr>
                    <th>Nama Pembeli</th>
                    <th>Alamat</th>
                    <th>Nomer HP</th>
                    <th>Obat</th>
                    <th>Transaksi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    while($pembeli_data = mysqli_fetch_array($pembeli)){
                        echo "<tr>";
                        echo "<td>". $pembeli_data['nm_pembeli']. "</td>";
                        echo "<td>". $pembeli_data['almt']. "</td>";
                        echo "<td>". $pembeli_data['no_hp']. "</td>";
                        echo "<td>". $obat_data['id']. "</td>";
                        echo "<td>". $transaksi_data['id']. "</td>";
                        echo "<td><a href='edit.php'>Edit</a> | 
                        <a href='delete.php'>Delete</a></td></tr>";
                    }
                    ?>
             </table>
    </body>
</html>