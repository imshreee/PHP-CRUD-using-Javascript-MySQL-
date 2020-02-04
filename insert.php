<?php
	$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo "Not connected to server";
	}
	if(!mysqli_select_db($con, 'crud'))
	{
		echo "Database Not Started";
	}
	$fullName = $_POST["fullName"];
	$empCode = $_POST["empCode"];
	$salary = $_POST["salary"];
	$city = $_POST["city"];
	
	$sql = "INSERT INTO crudapp (fullName,empCode,salary,city) VALUES 
			('$fullName','$empCode',$salary,'$city')";
	
	if(!mysqli_query($con,$sql))
	{
		echo "Not Inserted";
	}
	else
	{
		echo "Inserted";
	}
	
	// header("refresh:2; url="index.php");
	
?>
