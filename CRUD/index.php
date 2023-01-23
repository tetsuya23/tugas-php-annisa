<?php
include_once("koneksi.php");
$pembeli= mysqli_query($mysqli, "SELECT nm_pembeli, almt, no_hp, idobat, nm_obat, status FROM pembeli
                         JOIN obat ON pembeli.idobat = obat.id 
                         JOIN transaksi ON transaksi.id_pembeli = pembeli.id
                         ORDER BY nm_pembeli ASC");
?>

<html>
    <head>
        <title> CRUD PHP </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>

    <body>
        <center>
            <a class='btn btn-info' href="index.php">Obat</a> |
            <a class='btn btn-info' href="index.php">Pembeli</a> |
            <a class='btn btn-info' href="index.php">Dokter</a> |
            <a class='btn btn-info' href="index.php">Petugas</a> |
            <a class='btn btn-info' href="index.php">Detail</a> |
            <a class='btn btn-info' href="index.php">Transaksi</a>
            <hr>
        </center>

        <a class='btn btn-success' href="add.php">Add Menu Pembeli</a><hr/></hr>
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
                        echo "<td>". $pembeli_data['nm_obat']. "</td>";
                        echo "<td>". $pembeli_data['status']. "</td>";
                        echo "<td><a class='btn btn-outline-success' href='edit.php'>Edit</a> | 
                        <a class='btn btn-secondary' href='delete.php'>Delete</a></td></tr>";
                    }
                    ?>
             </table>
    </body>
</html>