<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<?php include('hedder.php');?>

<body>
   <div class="container">
    <div class="row border rounded">
      <div class="col-md-6">
        <img src="img1.webp"  class="rounded" style="width:100%; height: 40rem;" alt="">
      </div>
      <div class="col-md-6">
        <form action="controller.php" method="POST">
        <h1 class="card-header text-center">Login</h1>
        <br>
       <b> <?php
if(isset($_GET['msg'])){ 
  $messege = $_GET['msg'];
  print_r($messege);
} 

?> </b>
<br>
       email:  <br>
      <input type="text" class="form-control" name="email_id" id="">
      <br>
      password: 
      <br>
      <input type="password" class="form-control" name ="password">
      <br>
      <input type="submit" class="btn btn-primary" name="login" value= "Login">

      <br>
      <a href="">forget password?</a>
      </div> </form>

    </div>
   </div>
</body>
</html>