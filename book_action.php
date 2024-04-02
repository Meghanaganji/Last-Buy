<!-- <?php

include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';





$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$date = $_POST['Date'];
$no = $_POST['number'];
$final=0;
$Route="";
$sql_price="SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'AND `Date` = '$date' AND class='$class' AND number>='$no'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = ($row["Amt"]/$row['number']) *$no ;
$tickets=$row['number']-$no;
$da = $row["Date"] ;
}
if ($source == $dest)
{
  echo"<h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>";
  echo'<center>
<td><form action="book.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Go Back</h3></span></a></td></button></form>
';
}
elseif($final==0){
  echo "<h2><center><b>No Available Tickets Try Once Again! Better Luck next time! Check the available tickets<b></center><h2>";
}
else{
	echo "<h1><center><b><img src=https://img.icons8.com/cotton/80/000000/route.png>SELECT ROUTE AND PROCEED TO CHECKOUT :</center></b></h1>";
  echo "<h1><center>$source to $dest</center></h1>";
  
echo'<center>
<td><form action="pay.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>Checkout</h3></span></a></td></button></form>
';

echo "  <br><br><br><h3><center>Total <b>".$class." Class , ".$date."</b> Journey type fare from <b>".$source." to ".$dest."</b> is  : ₹ <b>".$final."</b> and route via <b>".$source."----> ".$dest."</b></center></h3><br><br>";


$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['Amt']=$final;
$_SESSION['dest']=$dest;
$_SESSION['Class']=$class;
$_SESSION['Date']=$date;
$_SESSION['NoOfpass']=$no;
$_SESSION['Route']=$source.$Route.$dest;
$_SESSION['tickets']=$tickets;


}

?>
<br>
<br>
<br>
<br>
<center>
<td><form action="book.php"><button style="background-color: black; padding: 28px 80px; type="submit"; align=center;"><span style=color:white;><h3>Go back</h3></span></a></td></button></form><br><br>

<?php include 'footer.php';
?> 

 -->


<!-- Modified COde  -->


 <?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$date = $_POST['Date'];
$no = $_POST['number'];
$final = 0;
$Route = "";
$sql_price = "SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `Date` = '$date' AND class='$class' AND number>='$no'";
$result = $connect->query($sql_price);

while ($row = $result->fetch_assoc()) {
    $final = ($row["Amt"] / $row['number']) * $no;
    $tickets = $row['number'] - $no;
    $da = $row["Date"];
}

if ($source == $dest) {
    echo "<h1><center>Selected source and destination are the same. Please refill the details.</center></h1><br><br>";
    echo '<center>
        <form action="book.php">
            <button style="background-color: black; padding: 25px 70px;" type="submit" align="center">
                <span style="color:white;"><h3>Go Back</h3></span>
            </button>
        </form>
    </center>';
} elseif ($final == 0) {
    echo "<h2><center><b>No Available Tickets. Try Again! Better Luck next time! Check the available tickets.</b></center></h2>";
} else {
    echo '<h1><center><b><img src="https://img.icons8.com/cotton/80/000000/route.png">SELECT ROUTE AND PROCEED TO CHECKOUT :</b></center></h1>';
    echo "<h1><center>$source to $dest</center></h1>";
  
    echo '<center>
        <form action="pay.php">
            <button style="background-color: black; padding: 25px 70px;" type="submit" align="center">
                <span style="color:white;"><h3>Checkout</h3></span>
            </button>
        </form>
    ';

    echo "<br><br><br><h3><center>Total <b>".$class." Class, ".$date."</b> Journey type fare from <b>".$source." to ".$dest."</b> is: ₹ <b>".$final."</b> and route via <b>".$source." ----> ".$dest."</b></center></h3><br><br>";

    $_SESSION['final'] = $final;
    $_SESSION['source'] = $source;
    $_SESSION['Amt'] = $final;
    $_SESSION['dest'] = $dest;
    $_SESSION['Class'] = $class;
    $_SESSION['Date'] = $date;
    $_SESSION['NoOfpass'] = $no;
    $_SESSION['Route'] = $source.$Route.$dest;
    $_SESSION['tickets'] = $tickets;
}

echo '<br><br><br><br><center>
    <form action="book.php">
        <button style="background-color: black; padding: 28px 80px;" type="submit" align="center">
            <span style="color:white;"><h3>Go back</h3></span>
        </button>
    </form>
</center><br><br>';

include 'footer.php';
?>
