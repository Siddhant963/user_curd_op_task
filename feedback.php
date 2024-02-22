<html>
<?php 
include ('db.php');
include ('hedder.php');
$qry = "select * from feedback";
$result = mysqli_query($con , $qry);?>
  
  <?php if(isset($_GET['msg'])){ 
       $messege= $_GET['msg'];
       print_r($messege);

  }?>
 <table border = "1" class="table table-striped table-bordered">
 <thead>
 <th>id</th>
 <th>full_name</th>
 <th>feedback</th>
 <th>rating</th>
 <th>Action</th>
 <tbody>
 </thead>
 <?php while ($currentrow = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $currentrow['id'] ; ?></td>
        <td><?php echo $currentrow['full_name'] ; ?></td>
        <td><?php echo $currentrow['feedback'] ; ?></td>
        <td><?php echo $currentrow['rating'] ; ?></td>
        <td class="text-center">
            <a class="btn btn-danger btn-xl href="controller.php?deleted_feedback_id=<?php echo $currentrow['id'] ; ?>">delete</a>
        </td>
        <td class="text-center">
            <a class="btn btn-info btn-xl href="update_feedback.php?id=<?php echo $currentrow['id'] ; ?>">Edit</a>
        </td>
     
    </tr>
    <?php }?>
    </tbody>
 </table>
 </html>