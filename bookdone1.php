<!-- <?php
include 'connect.php' ;


session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style>
	#font{
      font-family: Montserrat, sans-serif;
     font-size: 18px !important;

}</style>

 <link rel='stylesheet' href='index.css'>


           
           
           
           <script type="text/javascript">
        
           </script>
          

</head>
 <?php 
   $result = mysqli_query($connect , "SELECT * FROM `bustransactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
  while ($row = mysqli_fetch_assoc($result)): 
    $tno = $row["T_No."];
    $_SESSION['tno']= $tno ;
  ?>

<body style="background-color: F5F1F0;">
	 <h2 align="center"><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png"/> Booking Summary</b></h2>
           <br>


				<table class="table table-striped" id="font">

				<tr>
					<th>Booking ID</th>
					<td><?php echo $row['T_No.']; ?></td>
				</tr>
			
				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>Source Station</th>
					<td><?php echo $_SESSION['source'] ?></td>
				</tr>

				<tr>
					<th>Destination</th>
					<td><?php echo $_SESSION['dest'] ?></td>
				</tr>

				<tr>
					<th>Route</th>
					<td><?php echo $_SESSION['Route'] ?></td>
				</tr>

				<tr>
					<th>Amount</th>
					<td>₹&nbsp&nbsp<?php echo $_SESSION['final'] ?></td>
				</tr>

				
			</table>
			


<table align = "Center">
<tr>
<td>
<div><td><a  href="print1.php?pid='<?php echo $_SESSION['tno']?>' " target="_blank" ><button style="background-color: black ; border-color:black  "><h3><span style="color:white;"> Show Ticket<br> </span></h3></button></a></td></td>
</td>
</tr>
</body style="background-color: F5F1F0;">
</div>
 <?php endwhile; ?>


 </html>
 -->


 <!-- Modified Code  -->


 <?php
include 'connect.php';

session_start();
if (empty($_SESSION['log'])) {
    header("location:index.php");
    exit;
}

include 'header.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Booking Summary</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
            background-color: #F5F1F0;
            font-family: Montserrat, sans-serif;
            font-size: 18px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            margin: 0 auto;
            width: 80%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #000;
            color: #FFF;
        }

        .center {
            text-align: center;
        }

        .button {
            background-color: #000;
            color: #FFF;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png" /> Booking Summary</b></h2>
    <br>

    <?php
    $result = mysqli_query($connect, "SELECT * FROM `bustransactions` WHERE `email`='" . $_SESSION['email'] . "' ORDER BY `T_No.` DESC LIMIT 1");
    while ($row = mysqli_fetch_assoc($result)) :
        $tno = $row["T_No."];
        $_SESSION['tno'] = $tno;
    ?>

        <table class="table table-striped">
            <tr>
                <th>Booking ID</th>
                <td><?php echo $row['T_No.']; ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $_SESSION['name']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $_SESSION['email']; ?></td>
            </tr>
            <tr>
                <th>Source Station</th>
                <td><?php echo $_SESSION['source']; ?></td>
            </tr>
            <tr>
                <th>Destination</th>
                <td><?php echo $_SESSION['dest']; ?></td>
            </tr>
            <tr>
                <th>Route</th>
                <td><?php echo $_SESSION['Route']; ?></td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>₹&nbsp;<?php echo $_SESSION['final']; ?></td>
            </tr>
        </table>

        <div class="center">
            <a href="print1.php?pid=<?php echo urlencode($_SESSION['tno']); ?>" target="_blank" class="button">Show Ticket</a>
        </div>

    <?php endwhile; ?>
</body>

</html>
