<!DOCTYPE html>
<html>

<head>
	<title>IF ELSE</title>
</head>

<body>
	<h2>BMI</h2>

	<form method="post" action="">
		NAMA <input type="text" name="nama" /><br />
		TINGGI BADAN (CM) <input type="text" name="tinggi" /><br />
		BERAT BADAN (KG)<input type="text" name="berat" /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>

	<?php
if(isset($_POST['submit'])){
$nama=$_POST['nama'];  
$tinggi=$_POST['tinggi'];
$berat=$_POST['berat'];
$hit1=$tinggi-100;
$ideal=$hit1-($hit1/10);

echo "<br>";
echo "Halo $nama Nilai BMI anda adalah";
echo "<br>";
echo "TINGGI BADAN ANDA :$tinggi cm,";
echo "<br>";
echo "BERAT BADAN ANDA  :$berat kg, ";
echo "<br>";

if ($berat>=2+$ideal||$berat==$ideal||$berat>=$ideal-2)
{
    echo "BERAT BADAN ANDA IDEAL"; 
}
else 
{
    echo "BERAT BADAN ANDA TIDAK IDEAL"; 
}
}
?>
</body>

</html>
