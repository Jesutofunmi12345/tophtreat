<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user1'])){
header('Location: index.php'); // Redirecting To Home Page
}
else{
  extract($_GET);
$sql = "DELETE FROM specials WHERE special_id = '$s_id'";
$result = mysqli_query($conn,$sql) or die(mysqli_error());

header('Location: special_deals.php');
$conn->close();
}
?>