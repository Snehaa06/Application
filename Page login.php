<!DOCTYPE html>
<html>
<head>
 <title>
 Hill Stations In Maharashtra
 </title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css">
 
 <link rel="stylesheet" href="styleme.css">
 
</head>
<body background="main imge.jpg" style="color: white;background-repeat: norepeat;background-size: cover;background-attachment: fixed;">
<h1>
<?php
$servername = localhost;
$username = "root";
$password = "";
$dbname = "hillstaions1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

echo "Database connecteds successfully";

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = INSERT INTO userlogin (id,username,password,email,phone number);
VALUES ('1','sneha','pooja','abc@gmail.com','9809909090');


echo "page login.html created successfully";



if ($conn->query($sql) === TRUE) {
  echo "page login.html created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>