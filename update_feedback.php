<?php
include('db.php');
if(isset($_GET['id'])){ 
    $id=$_GET['id'];
    $query= "select * from feedback where id = $id";
    $result= mysqli_query($con , $query);
    $data= mysqli_fetch_assoc($result);
}?>
<h1>feedback update</h1>
<form action="controller.php" method ="POST" >
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
    Full_name : <input type="text" name="name" value="<?php echo $data['full_name'];?>" >
    feedback : <input type="text " name="feedback" value="<?php echo $data['feedback'];?>">
    rating: <input type="number" name="rating" value="<?php echo $data['rating'];?>">
    <input type="submit" name="update_feedback">
    
</form>