<!DOCTYPE html>
<html>
<head>
	<title>TUGAS LOOPING</title>
</head>
<body> 
<form>
		<table border="1" cellspacing="0">
			<tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Kelas</th>
			</tr>
 
		<?php  for ($no = 1, $i=10, $a=100; $i<=100, $a<=1000  ; $i+=1, $a+=100) { ?>
 
			<tr>
				<td> <?php echo $no; ?></td>
				<td><?php echo "Nama ke-$i"; ?></td>
				<td><?php echo "Kelas $a"; ?></td>
			</tr>
 
		<?php $no++; } ?>
 
		</table>
	</form>
</body>
<html>