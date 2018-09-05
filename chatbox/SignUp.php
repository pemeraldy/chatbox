<?php


include 'dbhandler.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];

// var_dump($_POST);

echo $email."<br>";
echo $pwd."<br>";
echo $pwd2."<br>";

$sql = "INSERT INTO reg (email, pword, pword2 ) VALUES('$email','$pwd','$pwd2')";
$result = $conn->query($sql);

header('location:login.php');