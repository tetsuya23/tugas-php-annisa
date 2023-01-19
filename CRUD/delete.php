<?php
include_once("koneksi.php");
 
$nm_pembeli = $_GET['nm_pembeli'];
$almt = $_GET['almt'];
$no_hp = $_GET['no_hp'];
 
$result = mysqli_query($mysqli, "DELETE FROM pembeli WHERE nm_pembeli='$nm_pembeli'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
