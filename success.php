<?php
include 'dbcon.php';

$name = $_POST['fname'];
$bday = $_POST['bday'];
$address = $_POST['address'];
$zone = $_POST['zone'];
$legit = $_POST['legit'];

// echo $name;



$sql = "INSERT INTO `legit`(`name`, `bday`, `address`, `zone`, `number`) VALUES ('$name','$bday ','$address','$zone','$legit')";

$go = mysqli_query($con, $sql);

echo "<script> alert('Successful'); </script>";
header('Location: index.php');

?>

