<?php
include('db.php');
if(isset($_GET['id'])){ 
    $id=$_GET['id'];
    $query = "select * from  assignment where id = $id";
    $result =mysqli_query($con , $query);
    $data = mysqli_fetch_assoc($result); 
    print_r($data);
    
}?>
<h1>update assigment</h1>
<form action="controller.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id;?>">
    tittle : <input type="text" name="tittle" value="<?php echo $data['tittle'];?>">
   image: <input type="file" name="image" value = "<?php echo $data['image'];?>" >
    <input type="submit" name="update_assigment">
</form>