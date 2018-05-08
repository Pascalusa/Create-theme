<?php   
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$jour = $_POST['jour'];
$heures = $_POST['heures'];
$lieux = $_POST['lieux'];
$lunch_bowl = $_POST['lunch-bowl'];
$lunch_boissons = $_POST['lunch-boisson'];
$id = $_POST['id'];
  
  $conn = new mysqli('localhost', 'wordpressuser', '', 'WordPress');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM client";
$result = $conn->query($sql);


