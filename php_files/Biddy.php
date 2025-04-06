<?php
$Server = "localhost";
$username = "root";
$psrd = "";
$dbname = "Bidding";
$connection = mysqli_connect($Server, $username, $psrd, $dbname);


$query = "SELECT * FROM Product WHERE ProductStatus = 'No' ";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)) {
  $datenow = date("Y-m-d");

  $duedate = $row['EndDate'];

  $prodid = $row['ProductID'];
  if ($datenow >= $duedate) {


    $buyer = $row['Buyer'];


    if ($buyer == "Null") {
      $seller = $row['UserName'];
      $ProductName = $row['ProductName'];

      $message = "Sorry Mr." . $seller . ", Your Product " . $ProductName . " Remain Unsold  No one bid your product";
      $query1 = "insert into Notification values('$seller','$message','No')";
      mysqli_query($connection, $query1);

    } else {

      $qry = "UPDATE Product SET ProductStatus = 'Yes' WHERE ProductID = '$prodid'";
      mysqli_query($connection, $qry);

      $seller = $row['UserName'];
      $buyer = $row['Buyer'];
      $ProductName = $row['ProductName'];

      $qry1 = "select * from User where UserName='$seller'";
      $result1 = mysqli_query($connection, $qry1);
      $row1 = mysqli_fetch_array($result1);
      $sname = $row1['Name'];
      $semail = $row1['Email'];
      $sphone = $row1['Phone'];

      $qry2 = "select * from User where UserName='$buyer'";
      $result2 = mysqli_query($connection, $qry2);
      $row2 = mysqli_fetch_array($result2);
      $bname = $row2['Name'];
      $bemail = $row2['Email'];
      $bphone = $row2['Phone'];

      $message = "Congratulation Mr." . $sname . ", Your Product " . $ProductName . " has been sold and Buyer is " . $bname . " You can contact with Buyer by Email:" . $bemail . " or You can use phone:" . $bphone . ".";
      $query1 = "insert into Notification values('$seller','$message','No')";
      mysqli_query($connection, $query1);

      $message = "Congratulation Mr." . $bname . ", Your are the final and highest bidder of  Product " . $ProductName . ". Now This is Your Product. Product Seller is " . $sname . ", You can contact with Seller by Email:" . $semail . " or You can use phone: " . $sphone . ".";
      $query2 = "insert into Notification values('$buyer','$message','No')";
      mysqli_query($connection, $query2);
    }



  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bidding System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="CSS/Home.css"> -->

  <style>
    body {

      font-family: candara;
      background-color: rgb(170, 170, 230);
    }

    body {
      font-size: 16px;
    }

    .templete {
      width: 1350px;

    }

    .clear {
      overflow: hidden;
    }

    .bodysection {
      color: black;
    }

    .mainsection {
      background-color: lightgray;
      width: 1000px;
      padding: 30PX;
      float: left;
      margin: 10px;
    }

    .sidebar {
      width: 305px;
      background-color: #D3D3D3;
      padding: 10px;
      margin: 10px;
      float: right;
    }

    .Semisidebar h2 {
      background-color: #2E2E32;
      padding: 8px;
      color: white;
      margin-bottom: 10px;
      border-bottom: 5px solid #939499;
      text-align: center;
    }

    .Semisidebar p {
      float: right;
    }

    .Footer {
      color: black;
    }

    .Footer h2 {
      color: black;
    }
  </style>

  <script type="text/javascript">

    function bid(id) {
      if (confirm('Sure Participate?')) {
        alert('You Are Not Sign in, Please Sign In For Bid');
        window.location = 'BidProduct.php?bid=' + id
      }
    }
  </script>


</head>

<body>

  <div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="Biddy.php">BIDDY</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="Home.php"><b>&nbsp&nbsp&nbsp&nbspHome</b></a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>&nbsp&nbspProducts</b><span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Car.php"><b>Car</b></a></li>
              <li><a href="Mobile.php"><b>Mobile</b></a></li>
              <li><a href="Computer.php"><b>Computer</b></a></li>
            </ul>

          </li>
          <form class="navbar-form navbar-left" action="Search.php" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Search" size="40">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
        </ul>


        <ul class="nav navbar-nav navbar-right">
          <li><a href="About Project.php"><b>About site</b></a></li>
          <li><a href="Contact Us.php"><b>Contact Us</b></a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Login</b><span
                class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="UserLogin.php"><b>User Login</b></a></li>
              <li><a href="AdminLogin.php"><b>Admin Login</b></a></li>
            </ul>
          </li>
          <li><a href="Registration.php"><span class="glyphicon glyphicon-user"></span> <b>Sign Up</b></a></li>

        </ul>
      </div>
    </nav>
  </div>

  <div class="media">
    <div class="media-body">
      <div class="container">
        <h1>View, Bid & Buy Online</h1> <br>
        <img src="../Image/bidd.jpg" class="img-responsive" style="width:100%">
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="jumbotron">
      <h2 class="bg-primary">India's No#1 Bidding Platform</h2><br>
      <p class="text-muted"> •100% Riskfree Online Auctions<br></p>
      <p class="text-primary"> •Win or Buy Products at Huge Discount<br></p>
      <p class="text-info"> •Click To BID Easy Auctions<br></p>
      <p class="text-danger"> •Always Fair Auction Guaranteed<br></p>
      <p class="text-success">•Worldwide Shipping<br></p>
      </p>
    </div>
  </div>

</body>

</html>