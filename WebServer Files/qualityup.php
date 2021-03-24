<?php
$servername = "localhost";
$username = "test";
$password = "1234";
$dbname = "water_monetering";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$phv=$_POST["ph"];
$turv=$_POST["tur"];
$sql = "INSERT INTO quality (ph,turbidity) VALUES('".$phv."','".$turv."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

