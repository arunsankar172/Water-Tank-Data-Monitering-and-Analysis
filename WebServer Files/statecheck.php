<?php
$servername = "localhost";
$username = "test";
$password = "1234";
$dbname = "water_monetering";		 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$res= mysqli_query($conn,"SELECT volume_in_ltrs FROM tank ORDER BY s_no DESC LIMIT 0,1");
$row = mysqli_fetch_assoc($res);
$n=$row['volume_in_ltrs'];

if($n<10000)
	$q1= mysqli_query($conn,"UPDATE motor_state SET t1='T' WHERE id=1;");
if($n>31000)
	$q2= mysqli_query($conn,"UPDATE motor_state SET t1='F' WHERE id=1;");

mysqli_close($conn);
?>
