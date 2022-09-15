<!DOCTYPE html>
<html>
<head>
  <title>
    Hill Station In Maharastra
  </title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style\styleme.css">
    
</head>
<body background="logo2.jpg" style="color: black;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
  

<?php 
  
  session_start();
  $con=mysqli_connect('127.0.0.1:3360','root','','hillstation1');
  
  if (empty($_SESSION['username'])) 
  {?>
    <h1>
    <?php
    echo "Please login first";
    ?></h1>
    <?php
  }
  else
  {
    include 'navigation_page.php';
    $name = $_SESSION['username'];

    $username = $_POST['username'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    $reg = "insert into contact_us (username, email, question) values('$name', '$email', '$question')";
      mysqli_query($con, $reg);
      header('location:Ask us.php');
      echo "Question send successfully!!!";
    }
    ?>
  
    
  




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
