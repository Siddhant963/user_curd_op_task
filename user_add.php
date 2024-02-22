<?php include('hedder.php');
?>

<form action="controller.php" method="POST">
    <div class="container">
    <h1 class="text-center">Registration...</h1>
    <?php if(isset($_GET['msg'])){ 
    $msg= $_GET['msg'];
    print_r($_GET['msg']);
    }?>
    name: <input class="form-control" type="text" name="full_name">
    email: <input class="form-control" type="email" name="email_id">
    contact: <input class="form-control" type="number" name="number">
    password: <input class="form-control" type="password" name ="password">
    confiom password: <input type="password" class="form-control" name="conpass">
    <input class="btn btn-primary m-4" type="submit" name="add_user">
    </div>
</form>