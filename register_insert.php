<!--  
	
Script to add newly registered people in to the Database 



<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php
include 'connect.php';
include 'head2.php';

$name = $_POST['name'];
$email = $_POST['email'];
$dob  = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$Phone = $_POST['phone'];

$sql_userdatabase="Insert into userdatabase(Name ,Email , Gender, password , dob , Phone) values ('$name' , '$email' , '$Gender', '$password', '$dob', '$Phone')";
// if(TRUE){
// 	$encpass = password_hash($password, PASSWORD_BCRYPT);
// 	$code = rand(999999, 111111);
// 	$data_check = mysqli_query($connect, $sql_userdatabase);
// 	if($data_check){
// 		$subject = "Email Verification Code";
// 		$message = "Your verification code is $code";
// 		$sender = "From: lastbuyresemail@gmail.com";
// 		if(mail($email, $subject, $message, $sender)){
// 			$info = "We've sent a verification code to your email - $email";
// 			$_SESSION['info'] = $info;
// 			$_SESSION['email'] = $email;
// 			$_SESSION['password'] = $password;
// 			header('location: resetcode.php');
// 			exit();
// 		}else{
// 			$errors['otp-error'] = "Failed while sending code!";
// 		}
// 	}else{
// 		$errors['db-error'] = "Failed while inserting data into database!";
// 	}
// }

if(mysqli_query($connect, $sql_userdatabase) == true)
{
	echo "<center><h1><b>You have been sucessfully registered<b> </h1></center><br><br>";
	echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';}

?> -->


<!-- Modified Code  -->



<!DOCTYPE html>
<html>
<head>
	<style>
		.table {
			font-family: Montserrat, sans-serif;
			align-items: center;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
	include 'connect.php';
	include 'head2.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$password = $_POST['password'];
	$gender = $_POST['Gender'];
	$phone = $_POST['phone'];

	$sql_userdatabase = "INSERT INTO userdatabase(Name, Email, Gender, Password, dob, Phone) VALUES ('$name', '$email', '$gender', '$password', '$dob', '$phone')";

	if (mysqli_query($connect, $sql_userdatabase) == true) {
		echo "<center><h1><b>You have been successfully registered</b></h1></center><br><br>";
		echo '<center><table><tr><td><a href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in!</span></button></a></td></tr></table></center>';
	} else {
		echo "<center><h1><b>Registration Unsuccessful, try again with different credentials</b></h1></center><br><br>";
		echo '<center><table><tr><td><a href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register Again</span></button></a></td></tr></table></center>';
	}
	?>
</body>
</html>
