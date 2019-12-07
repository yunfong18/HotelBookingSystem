<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="hotelbookingsystem";
// Create connection
$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword,$dbName);

{
	foreach ($_GET as $key => $value){
	$id=$value;
	}
	echo $id; 
	
// sql to delete a record

$sql="SET foreign_key_checks = 0";
$sql1 = "delete customer, booking from customer inner join booking 
	where customer.c_id=booking.c_id and customer.c_id ='$id'";
	
mysqli_query($conn,$sql);
	
	if (mysqli_query($conn, $sql1)) 
{
    echo "Record deleted successfully";
	header("Location:display.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
	
}
}
mysqli_close($conn);
?>