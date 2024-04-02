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

table#database_table {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
}

#database_table td, #database_table th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#database_table tr:nth-child(even){background-color: #f2f2f2}

#database_table th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}
</style>
<title>LAST-BUY DATABASE</title>  
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
</head>  
<body >  
    <h2><center><b><img src="https://img.icons8.com/nolan/64/database.png"/>AVAILABLE TRAIN TICKETS <img src="https://img.icons8.com/ultraviolet/60/000000/train.png"/></center></b></h2>
    <div class="container">  
        <br />
        <table id="database_table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Class</th>
                    <th>No.of Tickets</th>
                    <th>Amt</th>
                </tr>  
            </thead>  
<tbody>
<?php

$sql_transactions="SELECT * FROM `price` " ;
$result = $connect->query($sql_transactions);
while($row = $result->fetch_assoc()){

    echo'<tr class="class="table table-striped table-bordered"">
    <td>'.$row["Date"].'</td>
    <td>'.$row["source"].'</td>
    <td>'.$row["dest"].'</td>
    <td>'.$row["class"].'</td>
    <td>'.$row["number"].'</td>
    <td>'.$row["Amt"].'</td>
   

';
}
?>
</tbody>
</table>
</div>
 <script>  
 $(document).ready(function() {
    $('#database_table').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} ); 
 </script>  
<?php include 'footer.php';
?>  -->




<!-- Modified Code  -->



<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
?>
<head>
<style>
    table#database_table {
        font-size: 16px;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        border-spacing: 0;
    }

    #database_table td, #database_table th {
        border: 1px solid #ddd;
        text-align: left;
        padding: 8px;
    }

    #database_table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #database_table th {
        padding-top: 11px;
        padding-bottom: 11px;
        background-color: black;
        color: white;
    }
</style>
<title>LAST-BUY DATABASE</title>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>
<body>
    <h2><center><b><img src="https://img.icons8.com/nolan/64/database.png"/> AVAILABLE TRAIN TICKETS <img src="https://img.icons8.com/ultraviolet/60/000000/train.png"/></center></b></h2>
    <div class="container">
        <br />
        <table id="database_table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Class</th>
                    <th>No.of Tickets</th>
                    <th>Amt</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_transactions = "SELECT * FROM `price`";
                $result = $connect->query($sql_transactions);
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row["Date"] . '</td>
                            <td>' . $row["source"] . '</td>
                            <td>' . $row["dest"] . '</td>
                            <td>' . $row["class"] . '</td>
                            <td>' . $row["number"] . '</td>
                            <td>₹&nbsp&nbsp' . $row["Amt"] . '</td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#database_table').DataTable({
                "order": [[1, "asc"]]
            });
        });
    </script>
</body>
<?php include 'footer.php'; ?>
