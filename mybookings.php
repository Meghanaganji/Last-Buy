<!-- <?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<head>
<style>

.container{
    border-spacing: 10px;

  font-family: Montserrat, sans-serif;
 font-size: 18px !important;
  border: 2px solid grey;
    margin-top: 30px;
    margin-bottom: 50px;
   padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 50px;
  align-content: center;
  height: 25em;
}
.button {
padding: 15px 32px;
align-content: left;
color: white;
background-color:black;
}
#number {
overflow: hidden;
width: 600px;
}
input[type=number]{
width: 250px;
} 
</style>
</head>
<br><br>
  <h1><center><b><img src="https://img.icons8.com/cute-clipart/70/000000/bookmark.png"/> User Bookings &nbsp <img src="https://img.icons8.com/nolan/74/ticket.png"/></center></b></h1>
<div class="container" style="align:center">
<section id="form" class="formborder">
<div class="container2">
<td><a href='trainbookings.php'><button style="background-color: black ; border-color:black;width: 1000px; height: 80px;align:center; "  ><img src="https://img.icons8.com/dusk/44/000000/train-ticket.png"/> View Train Bookings </button></a></td>
    <tr> 
    <br><br><br> 
    <tr>
    <td><a href='busbookings.php'><button style="background-color: black ; border-color:black ;width: 1000px; height: 80px;align:center;  "><img src="https://img.icons8.com/officel/50/000000/bus-ticket.png"/> View Bus Bookings</button></a></td></td>
    </tr>
    </table>
    </tr>
</div>
</section>
</div>
<?php include 'footer.php';
?> 
</body>
</html> -->


<!-- Modified Code  -->


<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Bookings</title>
    <style>
        body {
            background-color: #F5F1F0;
            font-family: Montserrat, sans-serif;
        }
        
        .container {
            border: 2px solid grey;
            margin-top: 30px;
            margin-bottom: 50px;
            padding: 50px;
            align-content: center;
            height: 25em;
        }
        
        .button {
            padding: 15px 32px;
            color: white;
            background-color: black;
            border: none;
            border-radius: 5px;
        }
        
        .button:hover {
            background-color: #333;
        }
        
        h1 {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1><b><img src="https://img.icons8.com/cute-clipart/70/000000/bookmark.png"/> User Bookings &nbsp <img src="https://img.icons8.com/nolan/74/ticket.png"/></b></h1>
    <div class="container">
        <section id="form" class="formborder">
            <div class="container2">
                <a href='trainbookings.php'><button class="button"><img src="https://img.icons8.com/dusk/44/000000/train-ticket.png"/> View Train Bookings</button></a>
                <br><br>
                <a href='busbookings.php'><button class="button"><img src="https://img.icons8.com/officel/50/000000/bus-ticket.png"/> View Bus Bookings</button></a>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
