<html>
<head>
	<title>Edit Pembeli</title>
</head>

<?php
	include_once("koneksi.php");
	$id_pembeli = $_POST['id'];
    $almt = $_POST['almt'];
    $no_hp = $_POST['no_hp'];
    
	$pembeli = mysqli_query($mysqli, "SELECT pembeli.id as id_pembeli FROM pembeli WHERE id='$id_pembeli'");
    $obat = mysqli_query($mysqli, "SELECT * FROM obat");
    $transaksi = mysqli_query($mysqli, "SELECT * FROM transaksi");
    
    while($pembeli_data = mysqli_fetch_array($pembeli))
    {
    	
    	$id_pembeli = $pembeli_data['id'];
    	$almt = $pembeli_data['almt'];
        $no_hp = $pembeli_data['no_hp'];
    	$obat = $obat_data['id'];
        $transaksi = $transaksi_data['id'];
    	
    }
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php<?php echo $id_pembeli; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nm_pembeli" value="<?php echo $id_pembeli; ?>"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="almt" value="<?php echo $almt; ?>"></td>
			</tr>
			<tr> 
				<td>Nomer HP</td>
				<td><input type="text" name="no_hp" value="<?php echo $no_hp; ?>"></td>
			</tr>
			<tr> 
				<td>Obat</td>
				<td>
					<select name="id">
						<?php 
						    while($obat_data = mysqli_fetch_array($obat)) {         
						    	echo "<option ".($obat_data['id'] == $id ? 'selected' : '')." value='".$obat_data['id']."'>".$obat_data['nm_obat']."</option>";
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
						    	echo "<option ".($transaksi_data['id'] == $id ? 'selected' : '')." value='".$transaksi_data['id']."'>".$transaksi_data['status']."</option>";
						    }
						?>
					</select>
				</td>
			</tr>
			
			<tr> 
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pembeli = $_POST['id'];
			$almt = $_POST['almt'];
			$no_hp = $_POST['no_hp'];
			$obat = $_POST['id'];
			$transaksi = $_POST['id'];
						
			include_once("koneksi.php");

			$result = mysqli_query($mysqli, "UPDATE pembeli SET id = '$id_pembeli', almt = '$almt', no_hp = '$no_hp', id = '$obat', id = '$transaksi',  WHERE id = '$id_pembeli';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>