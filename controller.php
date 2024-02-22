<?php include('db.php');
session_start();

if(isset($_POST['add_user'])){ 
    $name = $_POST['full_name'];
    $email = $_POST['email_id'];
    $contact = $_POST['number'];
    $password = $_POST['password'];
    $conpass = $_POST['conpass'];

    print_r($contact);
    if($password != $conpass){ 
        $msg= "password and confirm password are not matched";
        header('location:user_add.php?msg'.$msg);
    } else{ 

    $query= "insert into user(name, email , contact , password) values ('$name' , '$email' , '$contact' , '$password' )";
    $result = mysqli_query($con , $query);
    if($result){ 
        echo "data inserted";
    } else{ 
        echo "data not inserted";
    } header('location:user.php');
 }
}

if(isset($_GET['deleted_user_id'])){ 
    $id= $_GET['deleted_user_id'];
    $query= "delete from user where id = '$id'";
    $result = mysqli_query($con , $query);
    if($result){ 
        echo "user deleted";

    }else{ 
        echo"not deleted";
    } 
    header('location:user.php');
} 

if(isset($_POST['update_user'])){ 
    $id = $_POST['id'];
    $name = $_POST['full_name'];
    $email = $_POST['email_id'];
    $password = $_POST['password'];
    $contact = $_POST['number'];

    $query= "update user set name= '$name' ,email= '$email' , password ='$password' , contact='$contact' where id= $id";
    $result = mysqli_query($con , $query);
    if($result){ 
        $messege=  "data updated";
    } else{ 
       $messege=  "data not updated";
    } header('location:user.php?msg='.$messege);

}



if(isset($_POST['add_feedback'])){ 
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

    $query = "insert into feedback (full_name, feedback , rating) values ('$name', '$feedback' , '$rating')";
    $result = mysqli_query($con , $query);
    if($result){ 
        echo "feedback added";
    } else{ 
        echo "somthing error";
    } 
    header('location:feedback.php');
} 

if(isset($_GET['deleted_feedback_id'])){ 
    $id= $_GET['deleted_feedback_id'];
    $query= "delete from feedback where id = '$id'";
    $result = mysqli_query($con , $query);
    if($result){ 
        $messege= "feedback added";
    } else{ 
        $messege= "somthing error";
    } 
    header('location:feedback.php?msg='.$messege);

}

if(isset($_POST['update_feedback'])){ 
    $id= $_POST['id'];
    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

    $query = "update feedback set full_name='$name ' , feedback='$feedback', rating= '$rating' WHERE id=$id";
   
    $result = mysqli_query($con , $query);
    if($result){ 
        $messege= "feedback update";
    } else{ 
        $messege= "somthing error";
    } 
    header('location:feedback.php?msg='.$messege);
}


if(isset($_POST['add_assigment'])){
    $tittle = $_POST['tittle'];
    $image = $_FILES['image'];
    if($_FILES['image']){
      $tmp_name = $_FILES['image']['tmp_name'];
      $image_name= $_FILES['image']['name'];
      $destinationpath = "taskimg/".$image_name;
      move_uploaded_file($tmp_name , $destinationpath);
    }
    $query= "insert into assignment (tittle , image) values ('$tittle' , '$image_name')";
    $result = mysqli_query($con , $query);
    if($result){ 
        echo "task added";

    }else{ 
        echo"not added";
    } 
    header('location:assigment.php');
}

if(isset($_GET['delete_task_id'])){ 
    $id= $_GET['delete_task_id'];

    $query = "delete from assignment where id = '$id'";
    $result = mysqli_query($con , $query);
    if($result){ 
        echo "task deleted";

    }else{ 
        echo"not deleted";
    } 
    header('location:assigment.php');
}

 if(isset($_POST['update_assigment'])){ 
    $id= $_POST['id'];
    $tittle= $_POST['tittle'];
    $image = $_FILES['image'];
    $destinationpath = "taskimg/".$image;
      move_uploaded_file($image , $destinationpath);
    
      
    $query= "update assignment set tittle= '$tittle' , image= '$image' where id = $id";
    $result = mysqli_query($con , $query);
    if($result){ 
        $messege= "feedback update";
    } else{ 
        $messege= "somthing error";
    } 
    header('location:feedback.php?msg='.$messege);


 }
 
 if(isset($_POST['login'])){
    $email = $_POST['email_id'];
    $password = $_POST['password'];
    $qry = "select * from user where email='$email' and password='$password'";
    $result = mysqli_query($con,$qry);
    $_SESSION['is_user_login'] = 0;
    if(mysqli_num_rows($result) > 0){
        $userData = mysqli_fetch_assoc($result);
        $userName = $userData['name'];
        $userEmail = $userData['email'];
        $userContact = $userData['contact'];
        
        // set values in session
        $_SESSION['is_user_login'] = 1;
        $_SESSION['user_name'] = $userName;
        $_SESSION['user_email'] = $userEmail;
        $_SESSION['user_contact'] = $userContact;


        $msg = "Logedin Successfully";
        header('location:profile.php');
    }else{
        $msg = "Invalid email and password";
        header('location:login.php?msg='.$msg);
    }
}



?>