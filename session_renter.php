<?php
// mysqli_connect() function opens a new connection to the MySQL server.
require 'connection.php';
$conn = Connect();

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_renter'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT renter_username FROM renters WHERE renter_username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['renter_username'];
?>