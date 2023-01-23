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

    <form action="add.php" method="post" name="pembeli">
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
					<select name="id">
						<?php 
						    while($obat_data = mysqli_fetch_array($obat)) {         
						    	echo "<option value='".$obat_data['id']."'>".$obat_data['nm_obat']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
            <tr> 
				<td>Transaksi</td>
				<td>
					<select name="id">
						<?php 
						    while($transaksi_data = mysqli_fetch_array($transaksi)) {         
						    	echo "<option value='".$transaksi_data['id']."'>".$transaksi_data['status']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Add" value="Add"></td>
			</tr>
        </table>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$pembeli = $_POST['nm_pembeli'];
			$almt = $_POST['almt'];
			$no_hp = $_POST['no_hp'];
			$obat = $_POST['id'];
			$transaksi = $_POST['id'];
			
            include_once("koneksi.php");

			$result = mysqli_query($mysqli, "INSERT INTO `pembeli` (`nm_pembeli`, `almt`, `no_hp`, `id`, `id`) VALUES ('$pembeli', '$almt', '$no_hp', '$obat', '$transaksi');");
			
			header("Location:index.php");
        }
    ?>
</body>
</html>
