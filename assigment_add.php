<?php include('hedder.php');?>
<div class="container">
<h1 class="text-center">Add assigment</h1>
<form action="controller.php" method="POST" enctype="multipart/form-data">
    tittle : <input class="form-control" type="text" name="tittle">
   image: <input  class="form-control"type="file" name="image">
    <input class="btn btn-primary" type="submit" name="add_assigment">
</form> </div>