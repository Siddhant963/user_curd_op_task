<h1>update user</h1>
<?php
include('db.php');
if(isset($_GET['id'])){ 
    $id= $_GET['id'];
    $query = "select * from user where id =$id";
    $result = mysqli_query($con , $query);
    $data = mysqli_fetch_assoc($result);
    
}
?>
<form action="controller.php" method="POST" >
    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
    name: <input type="text" name="full_name" value="<?php echo $data['name'];?>">
    email: <input type="email" name="email_id" value="<?php echo $data['email'];?>">
    password: <input type="password" name ="password" value="<?php echo $data['password'];?>">
    contact: <input type="number" name="number" value="<?php echo $data['contact'];?>">
    <input type="submit" name="update_user">