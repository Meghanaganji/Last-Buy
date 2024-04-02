<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

                        <h2><center><img src="https://img.icons8.com/dusk/50/000000/checked-user-male.png"/><b>USER PROFILE DETAILS</center></b></h2>

           </script>
           <br>


				<table class="table table-striped">

			
				<tr>
					<th>Name</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>Email</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>User Id</th>
					<td><?php echo $_SESSION['userid'] ?></td>
				</tr>

				<tr>
					<th>Gender</th>
					<td><?php echo $_SESSION['Gender'] ?></td>
				</tr>

				<tr>
					<th>Date of Birth</th>
					<td><?php echo $_SESSION['dob'] ?></td>
				</tr>
				<tr>
					<th>Contact Number</th>
					<td><?php echo $_SESSION['phone'] ?></td>
				</tr>

				
			</table>
			<?php include 'footer.php';
?> 


<!-- Modified Code  -->


<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile Details</title>
    <style>
        body {
            background-color: #F5F1F0;
            font-family: Montserrat, sans-serif;
        }
        
        h2 {
            text-align: center;
            margin-top: 50px;
        }
        
        table {
            margin: 0 auto;
            width: 80%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2><img src="https://img.icons8.com/dusk/50/000000/checked-user-male.png"/><b>User Profile Details</b></h2>
    <br>
    <table>
        <tr>
            <th>Name</th>
            <td><?php echo $_SESSION['name'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $_SESSION['email'] ?></td>
        </tr>
        <tr>
            <th>User ID</th>
            <td><?php echo $_SESSION['userid'] ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?php echo $_SESSION['Gender'] ?></td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?php echo $_SESSION['dob'] ?></td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td><?php echo $_SESSION['phone'] ?></td>
        </tr>
    </table>
    <?php include 'footer.php'; ?>
</body>
</html>
