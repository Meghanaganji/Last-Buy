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
$sql_dataa="Insert into price(source ,dest ,class ,Date ,number ,Amt) values ('$source' , '$dest' , '$class', '$Date', '$number', '$Amt')";

if(mysqli_query($connect, $sql_dataa) == TRUE && ($source != $dest))
{
	echo "<center><h1><b>You have been sucessfully kept your Ticket for sale!<b> </h1></center><br><br>";
    echo'<center>
<td><form action="home.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Home</h3></span></a></td></button></form>
';
}
else
{
	echo "<center><h1><b>Unsucessful , Please try again!!! OR Source and destination are same <b> </h1></center><br><br>";
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
    <meta charset="UTF-8">
    <title>Ticket Sale</title>
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
$sql_dataa = "INSERT INTO price(source, dest, class, Date, number, Amt) VALUES ('$source', '$dest', '$class', '$Date', '$number', '$Amt')";

if (mysqli_query($connect, $sql_dataa) && ($source != $dest)) {
    echo '<div class="center">';
    echo '<h1>You have successfully kept your Ticket for sale!</h1><br><br>';
    echo '<form action="home.php">
            <button class="button" type="submit">
                <span>Home</span>
            </button>
        </form>';
    echo '</div>';
} else {
    echo '<div class="center">';
    echo '<h1>Unsuccessful, please try again!!! Or source and destination are the same.</h1><br><br>';
    echo '<form action="home.php">
            <button class="button" type="submit">
                <span>Home</span>
            </button>
        </form>';
    echo '</div>';
}

include 'footer.php';
?>
</body>
</html>
