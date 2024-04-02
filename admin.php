<!-- <?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:adminindex.php");
}
include 'adminheader.php';
?>

<br>
<br>
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
<h1 text-transform:capitalize;><center><b><img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> Welcome  <?php  echo " ". $_SESSION['name'] ."" ?> to Admins Data Base <img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> </center></b></h1>




<div class="container" style="align:center">
<section id="form" class="formborder">
<div class="container2">
<td><a href='admintraindb.php'><button style="background-color: black ; border-color:black;width: 1000px; height: 80px;align:center; "  ><img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp&nbsp View Train Bookings  </button></a></td>
        <tr> 
        <br> <br><br> 

        <tr>

        <td><a href='adminbusdb.php'><button style="background-color: black ; border-color:black ;width: 1000px; height: 80px;align:center;  "><img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp&nbspView Bus Bookings</button></a></td></td>
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
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:adminindex.php");
}
include 'adminheader.php';
?>

<br>
<br>
<head>
<style>

.container{
    border-spacing: 10px;
    font-family: Montserrat, sans-serif;
    font-size: 18px !important;
    border: 2px solid grey;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 50px;
    align-content: center;
    height: 25em;
}

.button {
    padding: 15px 32px;
    align-content: left;
    color: white;
    background-color: black;
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
<h1><center><b><img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> Welcome  <?php  echo $_SESSION['name'] ?> to Admin's Database <img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> </b></center></h1>

<div class="container">
  <section id="form" class="formborder">
    <div class="container2">
      <a href='admintraindb.php'><button class="button" style="width: 1000px;"><img src="https://img.icons8.com/nolan/54/train.png"/> View Train Bookings</button></a>
      <br><br>
      <a href='adminbusdb.php'><button class="button" style="width: 1000px;"><img src="https://img.icons8.com/nolan/54/bus.png"/> View Bus Bookings</button></a>
    </div>
  </section>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
