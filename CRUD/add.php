<html>
    <head>
        <title>Add Pembeli</title>
    </head>
    <?php
        include_once("koneksi.php");
        $obat = mysqli_query($mysqli, "SELECT * FROM obat");
        $transaksi = mysqli_query($mysqli, "SELECT * FROM transaksi");
?>
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form">
        <table width="25%" border="0">
            <tr>
                <td>nm_pembeli</td>
                <td><input type="text" name="nm_pembeli"></td>
            </tr>
        </table>
</body>
</html>
