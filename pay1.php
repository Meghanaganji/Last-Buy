<!-- <?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
?>

<html>
<head>
  <style >
    .formm{
       font-family: Montserrat, sans-serif;
     font-size: 18px !important;
     
    }
  </style>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
<title> Bus Payment Page </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2 align="center"><b>Bus Payment:</b></h2>
</head>
<body style="background-color: F5F1F0;">
  <div class="formm">
    <h2 align="center"><i>Enter Payment Details :</i></h2>
    <form method='post' action ='payaction1.php' >
    <table align="center">
    <tr><td><h3> Card No: </h3></td> <td colspan='2'><input type="Number" name="cno"  placeholder="xxxx-xxxx-xxxx-xxxx" maxlength='50'></td></tr>
    <tr><td><h3>Name : </h3></td> <td colspan='2'><input type="Text" name="name" placeholder="Card Holder Name" maxlength='50'></td></tr>
    <tr><td><h3>ExpiryDate: </h3></td> <td><input type="Number" name="Em" placeholder='MM' maxlength='2'></td>
    <td><input type="Number" name="Ey" placeholder='YY' maxlength='2'></td></tr>
    <tr><td><h3>CVV No:</td> </h3><td colspan='2'><input type="Password" name="Cvv" maxlength='3'></td></tr>
    <tr><td><h3>PIN NO:</h3> </td> <td colspan='2'><input type="Password" name="Pin" maxlength='4'></td></tr>


    <tr><td colspan='3'><center><button style="background-color:black ;  border-color:black" type='Submit' name='register_submit' >Complete Payment</Button></center></td></tr>
    </table>
    </form>
    <br>
    <br>
</div>
<?php include 'footer.php';
?> 
</body>
</html> -->





<!-- Modified Code  -->



<?php
include 'connect.php';
include 'head2.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
?>

<html>
<head>
    <style>
        body {
            background-color: #F5F1F0;
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
        }
        
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #f4f7f8;
            border-radius: 8px;
        }
        
        h2, h3 {
            text-align: center;
        }
        
        input[type="number"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            height: 40px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        
        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #222;
        }
    </style>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title>Bus Payment Page</title>
</head>
<body>
    <div class="form-container">
        <h2>Bus Payment</h2>
        <h3>Enter Payment Details</h3>
        <form method="post" action="payaction1.php">
            <input type="number" name="cno" placeholder="Card No (xxxx-xxxx-xxxx-xxxx)" required>
            <input type="text" name="name" placeholder="Card Holder Name" required>
            <div style="display: flex;">
                <input type="number" name="Em" placeholder="Expiry Month (MM)" style="flex: 1; margin-right: 10px;" required>
                <input type="number" name="Ey" placeholder="Expiry Year (YY)" style="flex: 1;" required>
            </div>
            <input type="password" name="Cvv" placeholder="CVV No" required>
            <input type="password" name="Pin" placeholder="PIN No" required>
            <button type="submit" name="register_submit">Complete Payment</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
