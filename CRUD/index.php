<?php
include_once("koneksi.php");
$pembeli= mysqli_query($mysqli, "SELECT pembeli.*, nm_pembeli, idobat FROM pembeli
                         JOIN obat ON pembeli.idobat = obat.id ORDER BY id_obat ASC");

?>

<html>
    <head>
        <title> CRUD PHP </title>
    </head>
    <body>
        <center>
            <a href="index.php">Obat</a> |
            <a href="#">Pembeli</a> |
            <a href="#">Dokter</a> |
            <a href="#">Petugas</a> |
            <a href="#">Detail</a> |
            <a href="#">Transaksi</a>
            <hr>
        </center>

        <a href="add.php">Add Menu Pembeli</a><hr/></hr>

            <table class="table" width='80%' border=1>
                <tr>
                    <th>nm_pembeli</th>
                    <th>almt</th>
                    <th>no_hp</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    while($pembeli_data = mysqli_fetch_array($pembeli)){
                        echo "<tr>";
                        echo "<td>". $pembeli_data['nm_pembeli']. "</td>";
                        echo "<td>". $pembeli_data['almt']. "</td>";
                        echo "<td><a href='form-edit.php?nm_pembeli=$pembeli_data[nm_pembeli]'>Edit</a> | 
                        <a href='delete.php?nm_pembeli=$pembeli_data[nm_pembeli]'>Delete</a></td></tr>";
                    }
                    ?>
             </table>
    </body>
</html>