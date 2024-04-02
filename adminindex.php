<!-- <?php
include 'connect.php';
include 'head2.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
 <style >  .table{  font-family: Montserrat, sans-serif;}
</style>
<title>LAST-BUY</title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png"/></div>
<br>
<br>
<body style="background-color: F5F1F0;">
	<h1><center><b>Admin Sign In</center></b></h1>

<form method='post' action ='adminauthenticate.php'  >
<div>
<table align="center" class="table">
<tr><td><h2><b>Email id : </b></h2></td> <td><input type="email" name="email" maxlength='50'></td></tr>
<tr><td><h2><b> Password : </b></h2></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
<tr><td colspan='2'><center><button type='Submit' style="background-color:black; border-color:black" name='login_submit' ><b>Sign in </b> </button></center></td></tr></table>


</table>
</form>
<center><h3><a href='sindex.php' style="color: black"><b>User Sign In ?</b></a></h3></center>

</body style="background-color: F5F1F0;">
</html> -->

<!-- Modified Code -->

<?php
include 'connect.php';
include 'head2.php';
?>

<html>
<head>
  <title>LAST-BUY</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="index.css">
  <style>
    body {
      font-family: "Montserrat", sans-serif;
      background-color: #F5F1F0;
    }

    .table {
      font-family: "Montserrat", sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #000000;
    }

    img {
      height: 280px;
    }

    form {
      margin-top: 20px;
    }

    input[type="email"],
    input[type="password"] {
      width: 300px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #000000;
    }

    button[name="login_submit"] {
      padding: 10px 20px;
      background-color: #000000;
      border: 1px solid #000000;
      color: #ffffff;
      border-radius: 5px;
    }

    button[name="login_submit"]:hover {
      background-color: #ff6600;
      border: 1px solid #ff6600;
      color: #ffffff;
    }

    a {
      color: #000000;
    }

    a:hover {
      color: #ff6600;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div>
    <center><img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png"/></center>
  </div>
  <br>
  <br>
  <h1><center><b>Admin Sign In</b></center></h1>
  <form method="post" action="adminauthenticate.php">
    <div>
      <table align="center" class="table">
        <tr>
          <td><h2><b>Email id:</b></h2></td>
          <td><input type="email" name="email" maxlength="50"></td>
        </tr>
        <tr>
          <td><h2><b>Password:</b></h2></td>
          <td><input type="password" name="password" maxlength="50"></td>
        </tr>
        <tr>
          <td colspan="2"><center><button type="submit" style="background-color: #000000; border-color: #000000" name="login_submit"><b>Sign in</b></button></center></td>
        </tr>
      </table>
    </div>
  </form>
  <center><h3><a href="sindex.php"><b>User Sign In?</b></a></h3></center>
</body>

</html>
