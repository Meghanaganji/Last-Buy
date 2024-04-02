<!-- <?php
session_start()?>     
           <h1 align="center"><mark>Ticket Details</h1></mark>
           <br>


			<style >
$black: #343434;

.ticket {

    font-family: Montserrat, sans-serif;
}

.ticketdesign {

  background: linear-gradient(to bottom, #Add8e6 0%, #Add8e6 19%, #d9d9d9 19%, #d9d9d9 100%);
  height: 35em;
  float: left;
  object-position: center;
  padding: 1em;
  margin-top: 100px;

}


.ticketstructure {
  align-content: center;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
   border-top-right-radius: 8px;
   border-bottom-right-radius: 8px;



  width: 75em;
}

h1 {
  font-size: 40px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;

 
}
h2 h3 {
  font-size: 20px;
  margin-top: 0;
      font-family: Montserrat, sans-serif;
      color:black;
}
span {
  color: black;
}
#options {
	align-content:center;
	align-items:center;
    text-align: center;
}
.printable {
   padding-left: 
   10px;text-align:left;
}
</style>
<?php
include 'connect.php';
$pid=$_GET['pid'];$sel="SELECT * FROM `transactions` WHERE `T_No.` =$pid";
			$rs=$connect->query($sel);
			while($row=$rs->fetch_assoc())
			{

				?>


				<div class="ticket " id="printable">
		
  <div class="ticketdesign ticketstructure" >
    <h1 align="left"><b>LAST-BUY</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booking ID: <?php echo $row['T_No.'] ?> </h1></span>
    <div class="title"><br>
     <h1 align="center"><span><?php echo $_SESSION['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $_SESSION['dest'] ?>  </span></h1>
    <h2 align="left"><span>DATE & TIME : &nbsp <?php echo $_SESSION['Date'] ?></span></h2> 
   <h2 align="left"><span>CLASS : &nbsp <?php echo $row['Class'] ?></span></h2>
   <h2 align="left"><span>DATE & TIME OF BOOKING : &nbsp <?php echo $row['Date'] ?></span></h2> 
   <h2 align="left"><span>NO. OF PASSENGERS :&nbsp <?php echo $_SESSION['NoOfpass'] ?> </span></h2>
   <h2 align="left"><span>AMOUNT : &nbsp ₹<?php echo $_SESSION['Amt'] ?> </span></h2>
   <h2 align="left"><span>ROUTE : &nbsp <?php echo $_SESSION['source']." ".$_SESSION['dest'] ?> </span></h2>
   <h2 align="center"><span>WISH YOU A HAPPY & SAFE JOURNEY</span> </h2>
   <tr>
<td>
<div><center><td><a <?php echo $_SESSION['tno']?>' " target="_blank" ><button onclick="window.print()" style="background-color: black ; border-color:black  "><h3><span style="color:white;"> Print Ticket<br> </span></h3></button></a></td></td></center>
</td>
   
</div>
    
    </div>
    
</tr>
</div>


			<?php
		}
		?>


<?php
$source=$_SESSION['source'];
$dest=$_SESSION['dest'];
$date=$_SESSION['Date'];
$class=$_SESSION['Class'];
$tickets=$_SESSION['tickets'];
$Amt=($_SESSION['Amt']/$_SESSION['NoOfpass'])*$tickets;
if($_SESSION['tickets']==0){
  
  $sql = "DELETE FROM price WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'AND `Date` = '$date' AND Class='$class'";

if (mysqli_query($connect, $sql)) {
} else {
  echo "Error deleting record: " . mysqli_error($connect);
}
}
else{
  $sql = "UPDATE price SET number='$tickets',Amt='$Amt'  WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'AND `Date` = '$date' AND class='$class' ";

  if (mysqli_query($connect, $sql)) {
  } else {
    echo "Error updating record: " . mysqli_error($connect);
  }
  
}

?>
</div> -->





<!-- Modofied Code  -->





<?php
session_start();
?>
<h1 align="center"><mark>Ticket Details</mark></h1>
<br>
<style>
  .ticket {
    font-family: Montserrat, sans-serif;
  }

  .ticketdesign {
    background: linear-gradient(to bottom, #Add8e6 0%, #Add8e6 19%, #d9d9d9 19%, #d9d9d9 100%);
    height: 35em;
    float: left;
    object-position: center;
    padding: 1em;
    margin-top: 100px;
  }

  .ticketstructure {
    align-content: center;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    width: 75em;
  }

  h1 {
    font-size: 40px;
    margin-top: 0;
    font-family: Montserrat, sans-serif;
  }

  h2,
  h3 {
    font-size: 20px;
    margin-top: 0;
    font-family: Montserrat, sans-serif;
    color: black;
  }

  span {
    color: black;
  }

  #options {
    align-content: center;
    align-items: center;
    text-align: center;
  }

  .printable {
    padding-left: 10px;
    text-align: left;
  }
</style>

<?php
include 'connect.php';
$pid = $_GET['pid'];
$sel = "SELECT * FROM `transactions` WHERE `T_No.` =$pid";
$rs = $connect->query($sel);
while ($row = $rs->fetch_assoc()) {
?>
  <div class="ticket" id="printable">
    <div class="ticketdesign ticketstructure">
      <h1 align="left"><b>LAST-BUY</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Booking ID: <?php echo $row['T_No.'] ?></h1>
      <div class="title"><br>
        <h1 align="center"><span><?php echo $_SESSION['source'] ?> &nbsp&nbsp To &nbsp&nbsp <?php echo $_SESSION['dest'] ?></span></h1>
        <h2 align="left"><span>DATE & TIME : &nbsp <?php echo $_SESSION['Date'] ?></span></h2>
        <h2 align="left"><span>CLASS : &nbsp <?php echo $row['Class'] ?></span></h2>
        <h2 align="left"><span>DATE & TIME OF BOOKING : &nbsp <?php echo $row['Date'] ?></span></h2>
        <h2 align="left"><span>NO. OF PASSENGERS :&nbsp <?php echo $_SESSION['NoOfpass'] ?></span></h2>
        <h2 align="left"><span>AMOUNT : &nbsp ₹<?php echo $_SESSION['Amt'] ?></span></h2>
        <h2 align="left"><span>ROUTE : &nbsp <?php echo $_SESSION['source'] . " " . $_SESSION['dest'] ?></span></h2>
        <h2 align="center"><span>WISH YOU A HAPPY & SAFE JOURNEY</span></h2>
        <tr>
          <td>
            <div><center><td><a <?php echo $_SESSION['tno'] ?>' " target="_blank"><button onclick="window.print()" style="background-color: black ; border-color:black  "><h3><span style="color:white;"> Print Ticket<br> </span></h3></button></a></td></td></center>
          </td>
        </div>
      </tr>
    </div>
  </div>
<?php
}
?>

<?php
$source = $_SESSION['source'];
$dest = $_SESSION['dest'];
$date = $_SESSION['Date'];
$class = $_SESSION['Class'];
$tickets = $_SESSION['tickets'];
$Amt = ($_SESSION['Amt'] / $_SESSION['NoOfpass']) * $tickets;

if ($_SESSION['tickets'] == 0) {
  $sql = "DELETE FROM price WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `Date` = '$date' AND Class='$class'";

  if (mysqli_query($connect, $sql)) {
  } else {
    echo "Error deleting record: " . mysqli_error($connect);
  }
} else {
  $sql = "UPDATE price SET number='$tickets',Amt='$Amt'  WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `Date` = '$date' AND class='$class'";

  if (mysqli_query($connect, $sql)) {
  } else {
    echo "Error updating record: " . mysqli_error($connect);
  }
}
?>

<?php include 'footer.php'; ?>
