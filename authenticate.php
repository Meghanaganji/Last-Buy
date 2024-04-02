<!-- <style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">
<?php

include 'connect.php' ;
include 'head2.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase = "Select * from userdatabase where email = '$email' and password='$password' ";
$result_userdatabase = mysqli_query($connect, $sql_userdatabase);
if(mysqli_num_rows($result_userdatabase) <= 0)
{
		echo "<center><h1><b>Something went wrong please login again<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! &nbsp&nbspAgain</span></button></a></td></tr></table></center>';
}
else
{
	
	header("location:book.php");
	$row_userdatabase = mysqli_fetch_array($result_userdatabase);
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_userdatabase['Name'];
	$_SESSION['userid']=$row_userdatabase['UserID'];
	$_SESSION['Gender']=$row_userdatabase['Gender'];
	$_SESSION['dob']=$row_userdatabase['DoB'];
    $_SESSION['phone']=$row_userdatabase['Phone'];



	$_SESSION['log']= '1' ;
}
?> -->


<!-- Modified Code  -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Railway Company</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <style>
        body {
            font-family: Montserrat, sans-serif;
        }
        .center {
            text-align: center;
            margin-top: 100px;
        }
        .button {
            background-color: black;
            border-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
<?php
include 'connect.php';
include 'head2.php';

$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase = "SELECT * FROM userdatabase WHERE email = '$email' AND password = '$password'";
$result_userdatabase = mysqli_query($connect, $sql_userdatabase);

if (mysqli_num_rows($result_userdatabase) <= 0) {
    echo '<div class="center">';
    echo '<h1>Something went wrong, please log in again.</h1><br><br>';
    echo '<a href="sindex.php" class="button">Sign in again</a>';
    echo '</div>';
} else {
    $row_userdatabase = mysqli_fetch_array($result_userdatabase);
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $row_userdatabase['Name'];
    $_SESSION['userid'] = $row_userdatabase['UserID'];
    $_SESSION['Gender'] = $row_userdatabase['Gender'];
    $_SESSION['dob'] = $row_userdatabase['DoB'];
    $_SESSION['phone'] = $row_userdatabase['Phone'];
    $_SESSION['log'] = '1';

    header("location:book.php");
}
?>
</body>
</html>
