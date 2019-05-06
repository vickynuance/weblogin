<?php 
// Start the session
session_start();

$con=mysqli_connect("localhost","root","","workphp");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$base_url = 'http://localhost/workphp/';
$sql = "select COUNT(id) registered_users from rigester";
$result = mysqli_query($con, $sql) or die ("Query error!");
$row = mysqli_fetch_array($result);



?>