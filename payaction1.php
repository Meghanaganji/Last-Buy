<!-- <?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
$name = $_POST['name'];
$card = $_POST['cno'];
$EM  = $_POST['Em'];
$EY = $_POST['Ey'];
$Cvv = $_POST['Cvv'];
$Pin = $_POST['Pin'];
$sql_transactions="INSERT INTO bustransactions(email,source,dest,Name,Class,NoOfpass,card_no,expmonth,expyear,cvv,pin,Amt,Route)VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','" . $_SESSION['name'] . "','".$_SESSION['Class']."' ,'".$_SESSION['NoOfpass']."','$card', '$EM', '$EY', '$Cvv', '$Pin', '".$_SESSION['Amt']."','".$_SESSION['Route']."')";

if(mysqli_query($connect, $sql_transactions) == true)
{
echo "<h1><center>Your Ticket has been sucessfully booked<center></h1><br>";
header("location: bookdone1.php");
}



?>
<?php include 'footer.php';
?>  -->



<!-- Modified Code  -->




<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}

$name = $_POST['name'];
$card = $_POST['cno'];
$EM  = $_POST['Em'];
$EY = $_POST['Ey'];
$Cvv = $_POST['Cvv'];
$Pin = $_POST['Pin'];

$sql_transactions = "INSERT INTO bustransactions(email,source,dest,Name,Class,NoOfpass,card_no,expmonth,expyear,cvv,pin,Amt,Route) VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','".$_SESSION['name']."','".$_SESSION['Class']."','".$_SESSION['NoOfpass']."','$card','$EM','$EY','$Cvv','$Pin','".$_SESSION['Amt']."','".$_SESSION['Route']."')";

if (mysqli_query($connect, $sql_transactions)) {
    echo "<h1><center>Your Ticket has been successfully booked</center></h1><br>";
    header("location: bookdone1.php");
}
?>

<?php include 'footer.php'; ?>
