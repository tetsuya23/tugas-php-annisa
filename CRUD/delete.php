<?php
include_once("koneksi.php");
 
$id_pembeli = $_GET['id_pembeli'];

$result = mysqli_query($mysqli, "DELETE FROM pembeli WHERE id='$id_pembeli'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
