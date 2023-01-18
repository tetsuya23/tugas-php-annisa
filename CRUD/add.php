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

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>nm_pembeli</td>
                <td><input type="text" name="nm_pembeli"></td>
            </tr>
            <tr>
                <td>almt</td>
                <td><input type="text" name="almt"></td>
            </tr>
            <tr>
                <td>no_hp</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
            <td>obat</td>
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
        </table>
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$nm_pembeli = $_POST['nm_pembeli'];
			$almt = $_POST['almt'];
			$no_hp = $_POST['no_hp'];
			$id = $_POST['idobat'];
			$id = $_POST['idtransaksi'];
			
            include_once("koneksi.php");

			$result = mysqli_query($mysqli, "INSERT INTO `pembeli` (`nm_pembeli`, `almt`, `no_hp`, `id`, `id`, `id_katalog`) VALUES ('$nm_pembeli', '$almt', '$no_hp', '$id', '$id');");
			
			header("Location:index.php");
        }
    ?>
</body>
</html>
