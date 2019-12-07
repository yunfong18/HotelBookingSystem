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
	//echo $id;
	
if(isset($_POST["submit"])){
	
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
	
   $sql = "update customer a inner join booking b ON (a.c_id = b.c_id) 
	        set
			a.c_first_name    = '$firstname',
			a.c_last_name     = '$lastname',
			a.c_date_of_birth = '$dateOfBirth',
			a.c_ic            = '$IC',
			a.c_gender        = '$gender',
			a.c_phone         = '$phone',
			a.c_email         = '$email',
			a.c_address       = '$address',
			a.c_postal        = '$postal',
			a.c_city          = '$city',
			a.c_state         = '$state',
			b.b_check_in_date = '$checkin',
			b.b_check_out_date= '$checkout',
			b.b_days          = '$days',
			b.b_guest         = '$guest',
			b.b_room          = '$room',
			b.b_room_type     = '$type',
			b.b_total_amount  = '$totalAmount'
			where a.c_id ='$id'";
 
	   if (mysqli_query($conn,$sql))
	{
		
		echo "New record created successfully.";
		}
	else
		{
		echo "Error:" .$sql."<br>".mysqli_error($conn);}
	
}
	mysqli_close($conn);
	$id              = '';
	$firstname		 = '';
	$lastname		 = '';
	$dateOfBirth 	 = '';
	$IC				 = '';
	$gender          = '';
	$phone           = '';
	$email           = '';
	$address		 = '';
	$postal			 = '';
	$city			 = '';
	$state			 = '';
	$checkin         = '';
	$checkout        = '';
	$days            = '';
	$guest           = '';
	$room            = '';
	$type            = '';
	$totalAmount     = '';
	
	if(isset($_POST['id'])){
		$sql="SELECT * FROM customer inner join booking
      		on customer.c_id=booking.c_id
	        WHERE customer.c_id=".$_POST['id'];
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			$row 			 = mysqli_fetch_assoc($result);
			$id				 = $row['c_id'];
			$firstname		 = $row['c_first_name'];
			$lastname		 = $row['c_last_name'];
			$dateOfBirth 	 = $row['c_date_of_birth'];
			$IC				 = $row['c_ic'];
			$gender          = $row['c_gender'];
			$phone           = $row['c_phone'];
			$email           = $row['c_email'];
			$address		 = $row['c_address'];
			$postal			 = $row['c_postal'];
			$city			 = $row['c_city'];
			$state			 = $row['c_state'];
			$checkin         = $row['b_check_in_date'];
			$checkout        = $row['b_check_out_date'];
			$days            = $row['b_days'];
			$guest           = $row['b_guest'];
			$room            = $row['b_room'];
			$type            = $row['b_room_type'];
			$totalAmount     = $row['b_total_amount'];
		}
	}
}
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
	Firstname:<br>
	<input type="text" name="Firstname" placeholder="Firstname"  ><br>
	Lastname:<br>
	<input type="text" name="Lastname" placeholder="Lastname"><br>
	Date of birth:<br>
    <input type="date" name="Birthday"><br>
	IC:<br>
	<input type="text" name="IC" size="14" placeholder="eg:xxxxxx-xx-xxxx" 
	pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}" title="Please follow the format"> <br>
	Gender:
	<br>
	<input type="radio" name="Gender" value="Male" >Male 
	<input type="radio" name="Gender" value="Female">Female
	<div class="input-group">
	Phone:<br>
	<input type="tel" name="Phone" size="12" placeholder="eg. 012-3456789" pattern="[0-9]{3}-[0-9]{7}" 
	title="Please Enter Number only">
	<br>
	Email:<br>
	<input type ="email" name="Email" placeholder="aaaa@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
	title="Please follow the format">
	<br>
	Address: <br>
	<input type ="text" name="Address" placeholder="Address" >
	<br>
	Postal: <br>
	<input type ="text" name="Postal"  size="5" placeholder="xxxxx" pattern="[0-9]{5}"
    title="Please Enter Number only">
	<br>
	City: <br>
	<input type ="text" name="City" placeholder="City">
	<br>
	State: <br>
	<select name="State" >
			   <option value="">-Select-</option>
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
       </select><br>
	CheckIn: <br>
	<input type="date" name="CheckIn"><br>
	CheckOut:<br>
	<input type="date" name="CheckOut"><br>
	Number of Days:<br>
    <input type="number" name="Days" min="0" max="100"><br>
	Number of Guest:<br>
	<input type="number" name="Guest" min="0" max="100"><br>
	Number of Room:<br>
	<input type="number" name="Room" min="0" max="100" ><br>
	Type of Room:<br>
	<select name="Type" >
			   <option value=""></option>
               <option name="Standard Queen" value="Standard Queen">Standard Queen</option>
			   <option name="Deluxe Queen" value="Deluxe Queen">Deluxe Queen</option>
			   <option name="Standard King" value="Standard King">Standard King</option>
			   <option name="Superior Queen" value="Superior Queen">Superior Queen</option>
               <option name="Superior King" value="Superior King">Superior King</option>
    <br>
    </select><br>
	Total Amount:<br>
	<input type="number" name="Amount" min="0" ><br><br>
	<input style="height:30px;width:80px" type="submit" name="submit" value="Update">
</form>
<br><br>
	<a href="index.php">Back to Homepage</a><br>
	<a href="display.php">Go To Display page</a><br>
</div>
</body>
</html>