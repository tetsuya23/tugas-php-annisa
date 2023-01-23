<html>
    <head>
        <title>Add Pembeli</title>
    </head>
    <?php
        include_once("koneksi.php");
        $pembeli = mysqli_query($mysqli, "SELECT * FROM pembeli");
        $obat = mysqli_query($mysqli, "SELECT * FROM obat");
        $transaksi = mysqli_query($mysqli, "SELECT * FROM transaksi");
?>
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" >
        <table width="25%" border="0">
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nm_pembeli"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="almt"></td>
            </tr>
            <tr>
                <td>Nomer HP</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
            <td>Obat</td>
				<td>
					<select name="id_obat">
						<?php 
						    while($obat_data = mysqli_fetch_array($obat)) {         
						    	echo "<option value='".$obat_data['Id']."'>".$obat_data['nm_obat']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
            <tr> 
				<td>Transaksi</td>
				<td>
					<select name="status">
					<option value="tunai">Tunai</option>
                    <option value="transfer">Transfer</option>
					</select>
				</td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
        </table>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
		if(isset($_POST['submit'])) {
		//echo "2";
            $pembeli = $_POST['nm_pembeli'];
			$almt = $_POST['almt'];
			$no_hp = $_POST['no_hp'];
			$obat = $_POST['id_obat'];
			$transaksi = $_POST['status'];
			
            include_once("koneksi.php");

			$insertpembeli = mysqli_query($mysqli, "INSERT INTO `pembeli` (`nm_pembeli`, `almt`, `no_hp`, `id_obat`) VALUES ('$pembeli', '$almt', '$no_hp', '$obat');");
            
			//$inserttransaksi = mysqli_query($mysqli, "INSERT INTO `transaksi` ('id_pembeli', 'status') VALUES ('$insertpembeli->lastInsertId()', '$transaksi');");

            
			header("Location:index.php");
        }
    ?>
</body>
</html>
