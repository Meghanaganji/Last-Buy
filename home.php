<!-- <?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
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
        margin-bottom: 30px;
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
<body>
<h1 text-transform:capitalize;><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome  <?php  echo " ". $_SESSION['name'] ."" ?> To LAST-BUY Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>




<div class="container" style="align:center">
<section id="form" class="formborder">
<div class="container2">
<td><a href='book.php'><button style="background-color: black ; border-color:black;width: 1000px; height: 80px;align:center; "  ><img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp&nbspBook Train Tickets </button></a></td>
        <tr> 
        <br> <br><br> 

        <tr>

        <td><a href='bookbus.php'><button style="background-color: black ; border-color:black ;width: 1000px; height: 80px;align:center;  "><img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp&nbspBook Bus Tickets</button></a></td></td>
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

<!-- Modified Code -->


<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location: sindex.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAST-BUY Booking Portal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 50px;
            border: 2px solid grey;
            border-radius: 10px;
        }

        .button {
            display: inline-block;
            padding: 15px 32px;
            color: white;
            background-color: black;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #333;
        }

        h1 {
            text-align: center;
            text-transform: capitalize;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .welcome-img {
            display: block;
            margin: 0 auto;
            width: 90px;
        }
    </style>
</head>

<body>
    <h1><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png" class="welcome-img" alt="Welcome Icon"/> Welcome <?php echo $_SESSION['name'] ?> to LAST-BUY Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png" class="welcome-img" alt="Welcome Icon"/></h1>

    <div class="container">
        <section id="form">
            <div class="container2">
                <a href="book.php" class="button"><img src="https://img.icons8.com/nolan/54/train.png" alt="Train Icon"/>&nbsp;&nbsp;Book Train Tickets</a>
                <br><br><br>
                <a href="bookbus.php" class="button"><img src="https://img.icons8.com/nolan/54/bus.png" alt="Bus Icon"/>&nbsp;&nbsp;Book Bus Tickets</a>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>
