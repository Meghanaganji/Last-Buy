<!-- <?php
include 'connect.php';
include 'head2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-image: url("https://cdn.dribbble.com/users/310943/screenshots/2229076/lost-password.gif");
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
}
    </style>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">

</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="resetcode.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>  
    
    
</body>
</html> -->



<!-- Modified Code  -->


<?php
include 'connect.php';
include 'head2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("https://cdn.dribbble.com/users/310943/screenshots/2229076/lost-password.gif");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        
        .form {
            margin-top: 200px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .form h2 {
            text-align: center;
        }
        
        .form p {
            text-align: center;
        }
        
        .form .form-control {
            margin-bottom: 10px;
        }
        
        .form .button {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="resetcode.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
