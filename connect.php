<?php
$servername = "localhost";
$database = "apotek";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);

$sql = "SELECT * FROM dokter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "dokter : " . $row["nm_dokter"]. "" . $row["alamat"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>