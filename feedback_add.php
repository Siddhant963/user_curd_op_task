<?php include('hedder.php'); ?>
<div class="container">
<h1 class="text-center" >feedback add</h1>
<form action="controller.php" method ="POST" >
    Full_name : <input  class="form-control"type="text" name="name">
    feedback : <input class="form-control" type="text " name="feedback">
    rating: <input class="form-control" type="number" name="rating">
    <input class="btn btn-primary" type="submit" name="add_feedback">
    
</form>
</div>