<!-- 
<head>
  <title>LAST-BUY</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=0.56, maximum-scale=3.0, minimum-scale=0.46">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  

  <style>

  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
 
   .navvvvvvbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #Add8e6;
    border: 0;
    font-size: 40px !important;
    letter-spacing: 4px;
    opacity: 2;
    padding: 37px;
    text-align: center;
    color:black;
    font-weight: 40000;
    border-radius: 0;  
}
   
    h1 {
          font-family: Montserrat, sans-serif;

    }

  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 23px !important;
    letter-spacing: 3px;
    opacity: 5;
    padding: 10px;
    border-radius: 0;  

  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
 
  body{
  }
  </style>
</head>

<nav  class="navvvvvvbar navvvvvvbar-default navvvvvvbar-top">
      <div  class="  navvvvvvbar-brand navvvvvvbar-center"><b><mark><img src="https://img.icons8.com/dusk/64/000000/bus.png"/>LAST-BUY<img src="https://img.icons8.com/officel/64/000000/tracks-intersection.png"/></mark></b>
  

</nav>
<nav class="navbar navbar-default navbar-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="home.php"><img src="https://img.icons8.com/clouds/60/000000/home.png"/>Home&nbsp</a></li>

        <li><a href="book.php"><img src="https://img.icons8.com/clouds/60/000000/train.png"/>Train Ticket&nbsp</a></li>
        <li><a href="bookbus.php"><img src="https://img.icons8.com/clouds/60/000000/bus.png"/>Bus Ticket&nbsp</a></li>
        <li><a href="mybookings.php"><img src="https://img.icons8.com/clouds/60/000000/bookmark.png"/>User Bookings&nbsp</a></li>
        <li><a href="trainschedule.php"><img src="https://img.icons8.com/clouds/60/000000/planner.png"/>Available Train Ticekts&nbsp</a></li>
        <li><a href="busschedule.php"><img src="https://img.icons8.com/clouds/60/000000/planner.png"/>Available Bus Ticekts&nbsp</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="https://img.icons8.com/bubbles/60/000000/user.png"/>&nbsp User : <?php  echo " ". $_SESSION['name'] ."" ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="myprofile.php"><span class="glyphicon glyphicon-user  "></span> My Profile</a></li>
    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out  "></span> Logout</a></li>
          </ul>
        
      </ul>
    </div>
  </div>
</nav>

</body>
</html> -->

<!-- Modified Code -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>LAST-BUY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    .navvvvvvbar {
      background-color: #add8e6;
      text-align: center;
      padding: 10px;
    }

    .navvvvvvbar b {
      font-size: 32px;
      letter-spacing: 4px;
      color: black;
    }

    .navbar {
      background-color: #fff;
      border: none;
      border-radius: 0;
      margin-bottom: 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-default .navbar-nav>li>a {
      color: #555 !important;
      font-weight: bold;
    }

    .navbar-default .navbar-nav>li>a:hover {
      color: #333 !important;
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:hover,
    .navbar-default .navbar-nav>.active>a:focus {
      background-color: transparent;
      color: #333 !important;
    }

    .navbar-default .navbar-toggle {
      border: none;
      background-color: transparent;
    }

    .navbar-default .navbar-toggle:focus,
    .navbar-default .navbar-toggle:hover {
      background-color: transparent;
    }

    .navbar-default .navbar-toggle .icon-bar {
      background-color: #333;
    }

    .navbar-default .navbar-collapse {
      border: none;
    }

    .navbar-default .navbar-collapse ul li.dropdown a {
      color: #000 !important;
    }

    .navbar-default .navbar-collapse ul li.dropdown a:hover {
      background-color: #f1f1f1 !important;
      color: #333 !important;
    }

    .navbar-default .navbar-collapse ul li.dropdown .dropdown-menu {
      border: none;
      background-color: #f1f1f1;
    }

    .navbar-default .navbar-collapse ul li.dropdown .dropdown-menu li a {
      color: #000 !important;
    }

    .navbar-default .navbar-collapse ul li.dropdown .dropdown-menu li a:hover {
      background-color: #333 !important;
      color: #fff !important;
    }
  </style>
</head>

<body>
  <nav class="navvvvvvbar">
    <b><mark><img src="https://img.icons8.com/dusk/64/000000/bus.png" alt="Bus Icon" />LAST-BUY<img src="https://img.icons8.com/officel/64/000000/tracks-intersection.png" alt="Track Icon" /></mark></b>
  </nav>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="home.php"><img src="https://img.icons8.com/clouds/60/000000/home.png" alt="Home Icon" />Home</a></li>
          <li><a href="book.php"><img src="https://img.icons8.com/clouds/60/000000/train.png" alt="Train Icon" />Train Ticket</a></li>
          <li><a href="bookbus.php"><img src="https://img.icons8.com/clouds/60/000000/bus.png" alt="Bus Icon" />Bus Ticket</a></li>
          <li><a href="mybookings.php"><img src="https://img.icons8.com/clouds/60/000000/bookmark.png" alt="Bookmark Icon" />User Bookings</a></li>
          <li><a href="trainschedule.php"><img src="https://img.icons8.com/clouds/60/000000/planner.png" alt="Planner Icon" />Available Train Tickets</a></li>
          <li><a href="busschedule.php"><img src="https://img.icons8.com/clouds/60/000000/planner.png" alt="Planner Icon" />Available Bus Tickets</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="https://img.icons8.com/bubbles/60/000000/user.png" alt="User Icon" />&nbsp;User: <?php echo $_SESSION['name'] ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>
