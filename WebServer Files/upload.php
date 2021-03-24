<?php
$servername = "localhost";
$username = "test";
$password = "1234";
$dbname = "water_monetering";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$vol=$_POST["vol"];
$dis=$_POST["dis"];
$sql = "INSERT INTO tank (volume_in_ltrs,distance) VALUES('".$vol."','".$dis."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

SELECT * FROM tank ORDER BY s_no DESC LIMIT 100 ;

