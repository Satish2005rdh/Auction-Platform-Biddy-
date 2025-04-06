<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bidding System - User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    body {
      font-family: Candara, sans-serif;
      background-color: rgb(170, 170, 230);
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .profile-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #333;
      margin-bottom: 20px;
    }

    .profile-info {
      font-size: 18px;
      text-align: center;
    }

    .profile-info p {
      margin: 5px 0;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .navbar-nav li a {
      font-weight: bold;
    }

    .navbar-brand {
      font-size: 24px;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .container {
        width: 100%;
        padding: 15px;
      }

      .profile-info {
        font-size: 16px;
      }
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
        <li class="active"><a href="UserProfile.php"><b>Home</b></a></li>
        <li><a href="UserPost.php"><b>Post</b></a></li>
        <li><a href="MyPost.php"><b>MyPost</b></a></li>
        <li><a href="MyBid.php"><b>MyBid</b></a></li>
        <li><a href="UUpdate.php"><b>Update Profile</b></a></li>
        <li><a href="Bidding.php"><b>Bidding</b></a></li>
        <li><a href="UNotification.php"><b>Notification</b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="ULogout.php"><span class="glyphicon glyphicon-user"></span> <b>Logout</b></a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <?php
    // Database connection
    $DATABASE = "localhost";
    $username = "root";
    $psrd = "";
    $dbname = "Bidding";
    $connection = mysqli_connect($DATABASE, $username, $psrd, $dbname);

    // Check if connection is successful
    if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Get the username from session
    $uname = $_SESSION['uname'];

    // Query to fetch user details from the database
    $query = "SELECT * FROM User WHERE UserName='$uname'";
    $result = mysqli_query($connection, $query);

    // If user exists
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);

      // Setting default values if some data is missing
      $photo = !empty($row['Photo']) ? $row['Photo'] : 'path/to/default-profile.png';
      $name = htmlspecialchars($row['Name']);
      $email = htmlspecialchars($row['Email']);
      $address = htmlspecialchars($row['Address']);
      $phone = htmlspecialchars($row['Phone'] ?? 'Not provided');
      $dob = htmlspecialchars($row['DOB'] ?? 'Not provided');
      // $join_date = htmlspecialchars($row['JoinDate']);

      // Display user profile
      echo "<div class='profile-container'>";
      echo "<div class='profile-header text-center'>";
      echo "<img class='profile-img' src='" . htmlspecialchars($photo) . "' alt='Profile Image'>";
      echo "<h1>" . $name . "</h1>";
      echo "<p class='username'>@" . htmlspecialchars($row['UserName']) . "</p>";
      echo "</div>";

      echo "<div class='profile-details'>";
      echo "<h3>Profile Details</h3>";
      echo "<p><strong>Email:</strong> " . $email . "</p>";
      echo "<p><strong>Address:</strong> " . $address . "</p>";
      echo "<p><strong>Phone:</strong> " . $phone . "</p>";
      echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
      // echo "<p><strong>Member Since:</strong> " . date('F j, Y', strtotime($join_date)) . "</p>";
      echo "</div>";

      // Option to edit profile
      echo "<div class='profile-actions'>";
      echo "<a href='UUpdate.php?username=" . $uname . "' class='btn-edit'>Edit Profile</a>";
      echo "</div>";

      // Displaying the user's activity or other details (optional)
      // For example, user's recent posts, orders, etc.
      // Example: echo "<h3>Recent Activity</h3>";
      // Example: echo "<p>Recent post: [Post Title]</p>";
      echo "</div>";
    } else {
      echo "<p>No user found.</p>";
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
  </div>

</body>

</html>