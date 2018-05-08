<?php   
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$jour = $_POST['jour'];
$heures = $_POST['heures'];
$lieux = $_POST['lieux'];
$lunch_bowl = $_POST['lunch-bowl'];
$lunch_boissons = $_POST['lunch-boisson'];
$id = $_GET['id'];
  
 $conn = new mysqli('localhost', 'wordpressuser', '', 'WordPress');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($GET['id'])){
  $id = $_GET['id'];
  $result = $sql->query("DELETE from client WHERE id='".$_GET['id']."'");
  if($result){
    header("location: index.php");
  } else {echo "jhj";}
}