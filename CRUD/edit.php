<html>
<head>
	<title>Edit Pembeli</title>
</head>

<?php
	include_once("koneksi.php");
	$id_pembeli = $_GET['id_pembeli'];
        
	$pembeli = mysqli_query($mysqli, "SELECT * FROM pembeli WHERE id='$id_pembeli'");
    $obat1 = mysqli_query($mysqli, "SELECT * FROM obat");
    
    
    while($pembeli_data = mysqli_fetch_array($pembeli))
    {
    	
    	$id_pembeli = $pembeli_data['id'];
		$nm_pembeli = $pembeli_data['nm_pembeli'];
    	$almt = $pembeli_data['almt'];
        $no_hp = $pembeli_data['no_hp'];
    	$obat = $pembeli_data['id_obat'];
        
    	
    }
?>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id_pembeli=<?php echo $id_pembeli; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nm_pembeli" value="<?php echo $nm_pembeli; ?>"></td>
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
					<select name="id_obat">
						<?php 
						    while($obat_data = mysqli_fetch_array($obat1)) {         
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
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pembeli = $_GET['id_pembeli'];
			$nm_pembeli = $_POST['nm_pembeli'];
			$almt = $_POST['almt'];
			$no_hp = $_POST['no_hp'];
			$obat = $_POST['id_obat'];
			
						
			include_once("koneksi.php");

			$result = mysqli_query($mysqli, "UPDATE pembeli SET nm_pembeli = '$nm_pembeli', almt = '$almt', no_hp = '$no_hp', id_obat = '$obat'  WHERE id = '$id_pembeli';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>