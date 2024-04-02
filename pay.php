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
<title> Train Payment Page </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2 align="center"><b>Train Payment:</b></h2>
</head>
<body style="background-color: F5F1F0;">


  <div class="formm">
  <h2 align="center"><i>Enter Payment Details :</i></h2>


<center><img src="logohead.png" width='35%'></center>
<form method='post' action ='payaction.php' >
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
            font-family: Montserrat, sans-serif;
            font-size: 18px !important;
        }
        
        .formm {
            margin: 0 auto;
            max-width: 500px;
            padding: 20px;
            background-color: #f4f7f8;
            border-radius: 8px;
        }
        
        h2, h3 {
            text-align: center;
        }
        
        table {
            margin: 0 auto;
            margin-top: 20px;
            width: 100%;
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
        }
        
        button[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <link rel='stylesheet' href='index.css'>
    <link rel="shortcut icon" href="logofig.jpg" />
    <title>Train Payment Page</title>
</head>
<body>
    <div class="formm">
        <h2><b>Train Payment:</b></h2>
        <h3><i>Enter Payment Details :</i></h3>
        <form method='post' action='payaction.php'>
            <table>
                <tr>
                    <td><h3>Card No:</h3></td>
                    <td colspan='2'><input type="number" name="cno" placeholder="xxxx-xxxx-xxxx-xxxx" maxlength='50'></td>
                </tr>
                <tr>
                    <td><h3>Name:</h3></td>
                    <td colspan='2'><input type="text" name="name" placeholder="Card Holder Name" maxlength='50'></td>
                </tr>
                <tr>
                    <td><h3>Expiry Date:</h3></td>
                    <td><input type="number" name="Em" placeholder='MM' maxlength='2'></td>
                    <td><input type="number" name="Ey" placeholder='YY' maxlength='2'></td>
                </tr>
                <tr>
                    <td><h3>CVV No:</h3></td>
                    <td colspan='2'><input type="password" name="Cvv" maxlength='3'></td>
                </tr>
                <tr>
                    <td><h3>PIN NO:</h3></td>
                    <td colspan='2'><input type="password" name="Pin" maxlength='4'></td>
                </tr>
                <tr>
                    <td colspan='3'><center><button type='submit' name='register_submit'>Complete Payment</button></center></td>
                </tr>
            </table>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
