<!-- <?php
include 'head2.php';

session_start();
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
 <link rel="shortcut icon" href="logofig.jpg" />
</head>
<body style="background-color: F5F1F0;">
<?php
session_destroy();
echo '<center><h2>Thank You for using LAST-BUY Booking Application<h2></center><br>';
echo '<center><table><tr><td><A href="index.php"><button style="background-color:black; border-color:black">Sign in ! &nbsp&nbspAgain</button></a></td></tr></table></center>';
?>
</body style="background-color: F5F1F0;">
</html> -->



<!-- Modified COde  -->



<?php
include 'head2.php';

session_start();
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
<!-- <style>
body {
  background-color: #F5F1F0;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.text {
  text-align: center;
  margin-bottom: 20px;
}

.button {
  padding: 15px 30px;
  background-color: black;
  color: white;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
}
</style> -->
</head>
<body>
<div class="container">
  <div>
    <div class="text">
      <h2>Thank You for using LAST-BUY Booking Application</h2>
    </div>
    <div>
      <a href="index.php"><button class="button">Sign in Again</button></a>
    </div>
  </div>
</div>
</body>
</html>
