<html>
<?php 
include ('db.php');
include ('hedder.php');

$qry = "select * from assignment";
$result = mysqli_query($con , $qry);?>
  
  
 <table border = "1" class="table table-striped table-bordered ">
 <thead>
 <th>id</th>
 <th>tittle</th>
 <th>image</th>
 <th>Action</th>

 <tbody>
 </thead>
 <?php while ($currentrow = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $currentrow['id'] ; ?></td>
        <td><?php echo $currentrow['tittle'] ; ?></td>
        <td>
            <img  class="img-fluid" src="taskimg/<?php echo $currentrow['image'] ?>" alt="" style="width:100px; height:100px;">
        </td>
      <td class="text-center"> 
        <a class="btn btn-danger btn-xl"  href="controller.php?delete_task_id=<?php echo $currentrow['id'] ; ?>">delete</a></td>
        <td class="text-center">
          <a  class="btn btn-info btn-xl" href="update_assigment.php?id=<?php echo $currentrow['id'] ; ?>">Edit</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
 </table>
 </html>