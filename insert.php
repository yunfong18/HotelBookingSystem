<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="hotelbookingsystem";

// Create connection
$conn = mysqli_connect($dbServername,$dbUsername, $dbPassword,$dbName);
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-image:url("images.jpg");
	background-repeat: repeat-y;}
.form{
	background-color:lightblue;
	margin: 0 auto;
    width: 400px;
	padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
	}
	
.form,textarea {
  
  font: 1em sans-serif;
  width: 300px;
  box-sizing: border-box;
  border: 1px solid #999;}
</style>
</head>
<body>
	
	<center><h1>Customer Information</h1></center>
	<div class= "form">
	<form action="" method="POST">
	Firstname: <br>
	<input type="text" name="Firstname" placeholder="Firstname" required><br><br>
	Lastname: <br>
	<input type="text" name="Lastname" placeholder="Lastname" required><br><br>
	Date of birth: <br>
    <input type="date" name="Birthday"required><br><br>
	IC:<br>
	<input type="text" name="IC" size="14" placeholder="eg:xxxxxx-xx-xxxx" 
	pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" title="Please follow the format"required> <br><br>
	Gender:<br>
	<input type="radio" name="Gender" value="Male" required>Male 
	<input type="radio" name="Gender" value="Female">Female
	<div class="input-group"><br>
	Phone: <br>
	<input type="tel" name="Phone" size="12" placeholder="eg. 012-3456789" pattern="[0-9]{3}-[0-9]{7}" 
	title="Please Enter Number only" required>
	<br><br>
	Email: <br>
	<input type ="email" name="Email" placeholder="aaaa@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
	title="Please follow the format" required>
	<br><br>
	Address: <br>
	<input type ="text" name="Address" placeholder="Address" required>
	<br><br>
	Postal: <br>
	<input type ="text" name="Postal"  size="5" placeholder="xxxxx" pattern="[0-9]{5}"
    title="Please Enter Number only"	required>
	<br><br>
	City: <br>
	<input type ="text" name="City" placeholder="City" required>
	<br><br>
	State: <br>
	<select name="State" required>
			   <option value=""></option>
               <option name="Johor" value="Johor">Johor</option>
			   <option name="Kuala Lumpur" value="Kuala Lumpur">Kuala Lumpur</option>
			   <option name="Kelantan" value="Kelantan">Kelantan</option>
			   <option name="Kedah" value="Kedah">Kedah</option>
               <option name="Melaka" value="Melaka">Melaka</option>
               <option name="Negeri Sembilan" value="Negeri Sembilan">Negeri Sembilan</option>
               <option name="Selangor" value="Selangor">Selangor</option>
               <option name="Terengganu" value="Terengganu">Terengganu</option>
			   <option name="Pahang" value="Pahang">Pahang</option>
               <option name="Penang" value="Penang" >Penang</option>
			   <option name="Perak" value="Perak">Perak</option>
               <option name="Perlis" value="Perlis">Perlis</option>
               <option name="Sabah" value="Sabah">Sabah</option>
               <option name="Sarawak" value="Sarawak">Sarawak</option>        
       </select><br><br>
	CheckIn: <br>
	<input type="date" name="CheckIn"><br><br>
	CheckOut: <br>
	<input type="date" name="CheckOut"><br><br>
	Number of Days: <br>
    <input type="number" name="Days" min="0" max="100"required><br><br>
	Number of Guest: <br>
	<input type="number" name="Guest" min="0" max="100"required><br><br>
	Number of Room: <br>
	<input type="number" name="Room" min="0" max="100" required><br><br>
	Type of Room: <br>
	<select name="Type" required>
			   <option value=""></option>
               <option name="Standard Queen" value="Standard Queen">Standard Queen</option>
			   <option name="Deluxe Queen" value="Deluxe Queen">Deluxe Queen</option>
			   <option name="Standard King" value="Standard King">Standard King</option>
			   <option name="Superior Queen" value="Superior Queen">Superior Queen</option>
               <option name="Superior King" value="Superior King">Superior King</option>
    <br>
    </select><br><br>
	Total Amount: <br>
	<input type="number" name="Amount" min="0"  required><br><br>
	<input style="height:30px;width:80px" type="submit" name="submit" value="Insert"><br>
	<br>
	</form>
	<a href="index.php">Back to Homepage</a><br>
	<a href="display.php">Go To Display page</a><br>
<?php

if(isset($_POST["submit"]))
{
	$firstname		 = $_POST["Firstname"];
	$lastname		 = $_POST["Lastname"];
	$dateOfBirth 	 = $_POST["Birthday"];
	$IC				 = $_POST["IC"];
	$gender          = $_POST["Gender"];
	$phone           = $_POST["Phone"];
	$email           = $_POST["Email"];
	$address		 = $_POST["Address"];
	$postal			 = $_POST["Postal"];
	$city			 = $_POST["City"];
	$state			 = $_POST["State"];
	$checkin         = $_POST["CheckIn"];
	$checkout        = $_POST["CheckOut"];
	$days            = $_POST["Days"];
	$guest           = $_POST["Guest"];
	$room            = $_POST["Room"];
	$type            = $_POST["Type"];
	$totalAmount     = $_POST["Amount"];
	
	$sql = "INSERT INTO customer (c_first_name,c_last_name,c_date_of_birth,c_ic,c_gender,c_phone,c_email,c_address,c_postal,c_city,c_state)
	VALUES ('$firstname', '$lastname', '$dateOfBirth','$IC','$gender','$phone','$email','$address','$postal','$city','$state');";	
	
	if (mysqli_query($conn,$sql))
	{
	$c_id= mysqli_insert_id($conn);
		echo "New record created successfully. Last inserted ID is:" . $c_id;}
		else{
		echo "Error:" .$ssql."<br>".mysqli_error($conn);}
	
	
	$sql="INSERT INTO booking (b_check_in_date,b_check_out_date,b_days,b_guest,b_room,b_room_type,b_total_amount,c_id) 
		VALUES ('$checkin','$checkout','$days','$guest','$room','$type','$totalAmount','$c_id');";
	
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
		
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
	
		
	mysqli_close($conn);	
}
?>
</body>
</html>