<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="hotelbookingsystem";
// Create connection
$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword,$dbName);

$sql = "SELECT * FROM customer inner join booking on customer.c_id=booking.c_id";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body style= "background-color: lightblue";>
	
	<center><h1 style= "color:red">Customer Information</h1></center>
	<form action='insert.php' target='_blank' method = 'POST'>
    <button type='submit'>Insert New Record </button>
	<br><br>
	<table style="width:20%" border="1" cellspacing="0" cellpadding="2px">
  <tr>
	<th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Date of Birth</th>
    <th>Ic</th>
    <th>Gender</th>
    <th>Phone</th> 
    <th>Email</th>
    <th>Address</th>
    <th>Postal code</th> 
    <th>City</th>
    <th>State</th>
    <th>Check In Date</th>
    <th>Check Out Date</th> 
    <th>Number of Days</th>
    <th>Number of Guest</th> 
    <th>Number of Room</th>
    <th>Room Type</th>
    <th>Total Amount</th>
	<th>Action</th>
  </tr>
  <?php
  if (mysqli_num_rows($result) > 0) 
  {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
		
 ?>
      <tr>
			<td><?php echo  $row["c_id"];?></td>
			<td><?php echo  $row["c_first_name"];?></td>
			<td><?php echo  $row["c_last_name"];?></td>
			<td><?php echo  $row["c_date_of_birth"];?></td>
			<td><?php echo  $row["c_ic"];?></td>
			<td><?php echo  $row["c_gender"];?></td>
			<td><?php echo  $row["c_phone"];?></td>
			<td><?php echo  $row["c_email"];?></td>
			<td><?php echo  $row["c_address"];?></td>
			<td><?php echo  $row["c_postal"];?></td>
			<td><?php echo  $row["c_city"];?></td>
			<td><?php echo  $row["c_state"];?></td>
			<td><?php echo  $row["b_check_in_date"];?></td>
			<td><?php echo  $row["b_check_out_date"];?></td>
			<td><?php echo  $row["b_days"];?></td>
			<td><?php echo  $row["b_guest"];?></td>
			<td><?php echo  $row["b_room"];?></td>
			<td><?php echo  $row["b_room_type"];?></td>
			<td><?php echo  $row["b_total_amount"];?></td>
			<td>
				<a href="update.php?id=<?php echo $row['c_id']; ?>">Update</a>
				<a href="delete.php?id=<?php echo $row['c_id']; ?>">Delete</a></td>
				
	  </tr>
<?php
		}
	}
?>
</body>
</html>