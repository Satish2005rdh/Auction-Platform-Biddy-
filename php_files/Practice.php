<?php
$uname = $_SESSION['uname'];

// Query to fetch user details from the database
$query = "SELECT * FROM User WHERE UserName='$uname'";
$result = mysqli_query($connection, $query);

// If user exists
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);

  // Display user profile
  echo "<div class='text-center'>";
  echo "<img class='profile-img' src='" . htmlspecialchars($row['Photo']) . "' alt='Profile Image'>";
  echo "</div>";
  echo "<div class='profile-info'>";
  echo "<h1>" . htmlspecialchars($row['Name']) . "</h1>";
  echo "<p>Email: " . htmlspecialchars($row['Email']) . "</p>";
  echo "<p>Address: " . htmlspecialchars($row['Address']) . "</p>";
  echo "</div>";

} else {
  echo "<p>No user found.</p>";
}
?>