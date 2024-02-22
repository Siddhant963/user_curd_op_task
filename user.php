<html>
<?php 
include ('db.php');
include ('hedder.php');

$qry = "select * from user";
$result = mysqli_query($con , $qry);?>
  
  <?php
  if(isset($_GET['msg'])){ 
    $messege = $_GET['msg'];
    
    print_r($messege);
  } ?>
  
 <table border = "1" class="table table-striped table-bordered">
 <thead>
 <th>id</th>
 <th>name</th>
 <th>email</th>
 <th>password</th>
 <th>contact</th>
 <th>Action</th>
 <th>Update</th>
 <tbody>
 </thead>
 <?php while ($currentrow = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $currentrow['id'] ; ?></td>
        <td><?php echo $currentrow['name'] ; ?></td>
        <td><?php echo $currentrow['email'] ; ?></td>
        <td><?php echo $currentrow['password'] ; ?></td>
        <td><?php echo $currentrow['contact'] ; ?></td>
        <td class="text-center">
            <a  class="btn btn-danger btn-xl"  href="controller.php?deleted_user_id=<?php echo $currentrow['id'] ; ?>">delete</a>
        </td>
        <td class="text-center">
            <a  class="btn btn-info btn-xl" href="update_user.php?id= <?php echo $currentrow['id'] ; ?>">Edit</a>
        </td>
       
    </tr>
    <?php }?>
    </tbody>
 </table>
 </html>