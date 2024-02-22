<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  <?php session_start();?>
   <nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">User opprestion</a>
	    </div>
	    <ul class="nav navbar-nav pull-right">
            <li><a href="user.php">user</a></li>
             <li><a href="feedback.php"> feedback</a></li>
             <li><a href="assigment.php">assigment</a></li>
             <li><a href="feedback_add.php">Add_feedback</a></li>
             <li><a href="assigment_add.php">Add_assigment</a></li>
             <?php 
             if(isset($_SESSION['is_user_login'])){ 
              echo "<li><a href='profile.php'>" .$_SESSION['user_name']."</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
             
             } else{ 
              echo "<li><a href='user_add.php'>Register</a></li>";
               echo "<li><a href='login.php'> Login</a></li>";
             }

             ?>
             
</ul>
</div>
	</nav>
</body>
</html>

