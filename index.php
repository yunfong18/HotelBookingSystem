<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
<style>
body{
	background-image:url("images.jpg");
	 background-repeat: repeat-y;}
.header {
	margin: 25px;
	text-align:center;
	color: black;
    padding: 50px;
}
.content {

	margin: 0px auto;
	text-align: center;
	font-size: 20px;	
}
</style>
</head>
<body >
	<div class='header'> 
	<h1>Welcome to Hotel Management System</h></div>
	<div class='content'>
	<form action='display.php' target='_blank' method = 'POST'>
    <button type='submit'>Display Record </button>
	</form><br>
	<form action='insert.php' target='_blank' method = 'POST'>
    <button type='submit'>Insert New Record </button>
	</form>
	</div>
    </div>
</body>
</html>