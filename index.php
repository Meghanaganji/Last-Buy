<!-- <?php

include 'homehead.php';
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
<body>
<br><br>
  <h1   text-transform: capitalize;><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome To LAST-BUY Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>


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



<!-- Modified Code  -->



<?php
include 'homehead.php';
?>
<head>
<style>
.container {
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
  background-color: black;
}

#number {
  overflow: hidden;
  width: 600px;
}

input[type=number] {
  width: 250px;
}
</style>
</head>
<body>
<br><br>
<h1><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> Welcome To LAST-BUY Booking Portal <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>

<div class="container" style="align:center">
<section id="form" class="formborder">
<div class="container2">
  <table>
    <tr>
      <td><a href='book.php'><button class="button"><img src="https://img.icons8.com/nolan/54/train.png"/>&nbsp&nbspBook Train Tickets</button></a></td>
    </tr>
    <tr> 
      <br> <br><br> 
    </tr>
    <tr>
      <td><a href='bookbus.php'><button class="button"><img src="https://img.icons8.com/nolan/54/bus.png"/>&nbsp&nbspBook Bus Tickets</button></a></td>
    </tr>
  </table>
</div>
</section>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
