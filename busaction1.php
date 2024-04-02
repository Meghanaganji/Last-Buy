<!-- <style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php

session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'connect.php' ;
include 'header.php';


$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$Date = $_POST['Date'];
$number = $_POST['number'];
$low= 0;
$height= 1000;

$Amt= rand($low, $height);
$sql_transactions="Insert into pricebus(source, dest, class, Date, no,Amt) values ('$source' , '$dest' , '$class', '$Date', '$number', '$Amt')";
if(mysqli_query($connect, $sql_transactions) == TRUE && ($source != $dest) )
{
	echo "<center><h1><b>You have been sucessfully kept your Ticket for sale!<b> </h1></center><br><br>";
    echo'<center>
<td><form action="home.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Home</h3></span></a></td></button></form>
';
}
else
{
	echo "<center><h1><b>Unsucessful , Please try again!!! OR Source and destination are same<b> </h1></center><br><br>";
    echo'<center>
    <td><form action="home.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Home</h3></span></a></td></button></form>
    ';
}

?>
<?php include 'footer.php';
?>  -->


<!-- Modified Code  -->



<!DOCTYPE html>
<html>
<head>
    <title>Ticket Booking</title>
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
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'connect.php';
include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$Date = $_POST['Date'];
$number = $_POST['number'];
$low = 0;
$height = 1000;

$Amt = rand($low, $height);
$sql_transactions = "INSERT INTO pricebus(source, dest, class, Date, no, Amt) VALUES ('$source', '$dest', '$class', '$Date', '$number', '$Amt')";
if (mysqli_query($connect, $sql_transactions) && ($source != $dest)) {
    echo "<center><h1><b>You have successfully kept your ticket for sale!</b></h1></center><br><br>";
    echo '<center>
        <form action="home.php">
            <button style="background-color: black; padding: 25px 70px; type="submit"><span style="color:white;"><h3>Home</h3></span></button>
        </form>
    </center>';
} else {
    echo "<center><h1><b>Unsuccessful, please try again!!! Or the source and destination are the same.</b></h1></center><br><br>";
    echo '<center>
        <form action="home.php">
            <button style="background-color: black; padding: 25px 70px; type="submit"><span style="color:white;"><h3>Home</h3></span></button>
        </form>
    </center>';
}

include 'footer.php';
?>
</body>
</html>
