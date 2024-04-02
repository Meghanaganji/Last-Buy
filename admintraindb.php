<!-- <?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'adminheader.php';
?>
 <!DOCTYPE html>  
 <html>  
<head>
<link rel='stylesheet' href='index.css'>
<style>
table#data {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

#data td, #data th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#data tr:nth-child(even){background-color: #f2f2f2}

#data th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}
</style>
<title>TRAIN PASSENGERS DATABASE</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
</head>
<body>  
     <br /><br />  
     <div class="container">  
          <h3 align="center" style="margin-top: 400px;">TRAIN PASSENGERS DATABASE</h3>  
          <br />  
                <div class="table-responsive">  
                     <table id="data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <th> Date & Time</th>
                                    <th> Booking ID  </th>
                                    <th> Name </th>
                                    <th> Source </th>
                                    <th> Destination </th>
                                    <th> Amount Paid</th>
                               </tr>  
                          </thead>  
                          <tbody>
  <?php 
   $result = mysqli_query($connect , "select * From transactions");
  while ($row = mysqli_fetch_assoc($result)): 
    
  ?>
  <tr>
    <td><?php echo $row['Date']; ?></td>
    <td><?php echo $row['T_No.']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['source']; ?></td>
    <td><?php echo $row['dest']; ?></td>
    <td><?php echo $row['Amt']; ?></td>
    </tr>
  
  <?php endwhile; ?>

    
</tbody>
</table> 
<a href='admin.php'><button style="background-color: black ; border-color:black ;align='center';width: 200px; height: 50px; margin-left:40%  "  ><span style="color:white">Go Back </span> </button></a>

</div>  
</div>  
 
 <script>  
 $(document).ready(function(){  
      $('#data').DataTable({
        "order": [[ 1, "desc" ]]
    } );
} ); 
 </script>  
 </body>  
 </html>  -->

<!-- Modifeied Code -->

 <?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'adminheader.php';
?>

<!DOCTYPE html>  
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

    h3 {
      margin-top: 50px;
      color: #000000;
    }

    table#data {
      font-size: 16px;
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
    }

    #data td,
    #data th {
      border: 1px solid #ddd;
      text-align: left;
      padding: 8px;
    }

    #data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #data th {
      padding-top: 11px;
      padding-bottom: 11px;
      background-color: #000000;
      color: #ffffff;
    }

    button {
      background-color: #ff6600;
      border-color: #ff6600;
      align: center;
      width: 200px;
      height: 50px;
      margin: 20px auto;
      color: #ffffff;
      display: block;
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #000000;
      border-color: #000000;
    }
  </style>
</head>

<body>  
  <div class="container">  
    <h3 align="center"><b>TRAIN PASSENGERS DATABASE</b></h3>  
    <div class="table-responsive">  
      <table id="data" class="table table-striped table-bordered">  
        <thead>  
          <tr>  
            <th>Date & Time</th>
            <th>Booking ID</th>
            <th>Name</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Amount Paid</th>
          </tr>  
        </thead>  
        <tbody>
          <?php 
          $result = mysqli_query($connect, "SELECT * FROM transactions");
          while ($row = mysqli_fetch_assoc($result)): 
          ?>
          <tr>
            <td><?php echo $row['Date']; ?></td>
            <td><?php echo $row['T_No.']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['source']; ?></td>
            <td><?php echo $row['dest']; ?></td>
            <td><?php echo $row['Amt']; ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table> 
      <a href="admin.php">
        <button><span style="color: #ffffff">Go Back</span></button>
      </a>
    </div>  
  </div>  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
  <script>  
    $(document).ready(function(){  
      $('#data').DataTable({
        "order": [[ 1, "desc" ]]
      });
    }); 
  </script>  
</body>  
</html>
