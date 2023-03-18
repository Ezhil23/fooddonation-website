<?php

$firstname= $_POST['firstname'];
$email = $_POST['email'];
$password =$_POST['password']
$phone = $_POST['phone'];
$gender = $_POST['gender'];




if (!empty($name) || !empty($email) || !empty($contactnumber) || !empty($quantity) || !empty($howoldsfood) || !empty($address) )

{
	$host = "localhost";
	$dbusername= "root";
	$dbpassword = "";
	$dbname ="New";




	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);



	if (mysqli_connect_error()){
		die('conenct error  ('. mysqli_connect_errono() .') ' . mysqli_connect_error());
	}




		//$INSERT = "INSERT Into submitform (name , email, contactnumber ,  quantity , how olds food , adress , special notes )values(?,?,?,?,?,?,?,?)";

   
	else{
	
	$stmt = $conn->prepare("insert into submitform(firstname, email, password, phone, gender)values(?,?,?,?,?)");
	$stmt->bind_param("ssssi",$firstname, $email, $password, $phone, $gender );


	$stmt->execute();
	echo "new reccord created successfully";
	$stmt->close();
	$conn->close();
}//else 

	//echo "something went wrong";


//$stmt->close();
//$conn->close();
		}
//} else {

	//echo " All field are required";
	//die();



?>
