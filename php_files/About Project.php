<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bidding System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    body {

      font-family: candara;
      background-color: rgb(170, 170, 230);
    }

    .font {
      font-family: Agency FB;
      font-size: 20px;
    }

    .modal-header {
      padding: 9px 15px;
      border-bottom: 1px solid #eee;
      background-color: #A9A9A9;
    }

    .modal-footer {
      background-color: #A9A9A9;
    }

    .modal-body {
      background-color: #324669;
      color: white;
    }

    h3 {
      font-size: 20px;
      color: black;
    }

    .about {
      font-size: 18px;
      color: black;
      margin-top: 10px;
      margin-bottom: 20px;
      letter-spacing: 2px;
      line-height: 1.6;
      text-align: justify;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="Biddy.php">BIDDY</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="Home.php"><b>&nbsp&nbsp&nbsp&nbspHome</b></a></li>
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
        <li class="active"><a href="#myModal" data-toggle="modal" data-target="#myModal"><b>About site</b></a></li>
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





  <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 style="text-align: center" class="modal-title"><b>Online Bidding System</b></h2>
          </div>
          <div class="modal-body">
            <h3>
              <!-- <i class="glyphicon glyphicon-thumbs-up"></i> &nbsp The purpose of this project is to build an “Online
              Bidding System”, a place for buyers and sellers to come together and trade almost anything.<br><br><i
                class="glyphicon glyphicon-thumbs-up"></i> &nbsp Usercan see the feature of this site without
              registration but for Bidding and selling user must be registrated.<br><br>
              <i class="glyphicon glyphicon-thumbs-up"></i> &nbsp Auctions have a name, a description, possibly a photo
              (of the related item) uploaded by users and an end period: users cannot place bids when the auction
              interval (start - end period) ends, but, in case there were no offers for an item, there is the
              possibility to extend the interval.<br><br> <i class="glyphicon glyphicon-thumbs-up"></i> &nbspMoreover,
              administrators have the possibility to accept or refuse auctions proposed by users, to view information
              about users and items and to create, modify and delete the categories of auctions (auctions regarding
              cars,Mobile,Computer). -->

              <h4>Mission</h4>
              At this site, our mission is to provide a dynamic and transparent marketplace where
              buyers and sellers can engage in exciting, fair, and seamless online auctions. Whether you're looking for
              rare collectibles, vintage antiques, cutting-edge electronics, or unique art pieces, our platform offers a
              diverse range of auction categories that cater to all interests and passions.

              We believe in creating an enjoyable auction experience that connects people from around the world and
              gives them the opportunity to acquire or sell items in an exciting competitive environment. Our goal is to
              empower both buyers and sellers with tools that make the auction process simple, secure, and efficient.

              With an unwavering commitment to customer satisfaction, we strive to foster a community where trust,
              transparency, and fairness guide every transaction. We are here to help you discover new treasures,
              achieve great deals, and build lasting connections.


            </h3>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="about">
      <h3>

      <h2><b>History</b></h2>
        Founded in 2024, Biddy started as a small online auction site aimed at connecting
        enthusiasts with unique, one-of-a-kind items in a niche market. What began as a small
        community of collectors soon grew into a thriving global platform.
        Over the years, we have expanded our offerings to include a wide range of auction categories, including
        [list major categories like art, antiques, electronics, sports memorabilia, etc.]. Our platform has seen
        consistent growth, with hundreds of thousands of users joining our auctions every year. Through continuous
        improvements in our website design, user interface, and auction tools, we have made bidding easier and
        more accessible
        to people of all experience levels. As we look to the future, we aim to further innovate in the world of
        online auctions by integrating advanced technologies such as AI-driven recommendations, personalized
        auction
        experiences, and improved payment security. Our journey is only just beginning, and we are
        excited to see how we can continue to evolve and
        meet the needs of our global community of buyers and sellers.
        <br><br>
        <h2><b>Team</b></h2>
        At Biddy, we are proud to have a passionate and diverse team that brings a wealth of
        expertise in various fields, from technology and design to customer service and auction management.
        <br><br>
        <h2><b>Satish & Rahul - Founder & CEO</b></h2>
        Satish founded Biddy with the vision of creating a user-friendly, fair, and
        transparent online auction experience. With a background in 15 years of experience,
        they has been instrumental in shaping the platform's mission and growth over the years.
        <br><br>
        <h2><b>Rahul - Chief Technology Officer (CTO)</b></h2>
        As our CTO, Rahul leads the technical development of the platform, ensuring that our systems run
        smoothly, securely, and efficiently. With extensive experience in [mention relevant skills or technology],
        [he/she/they] is dedicated to innovating the user experience and implementing cutting-edge technologies to
        keep us ahead in the market.
      </h3>
    </div>
</body>

</html>