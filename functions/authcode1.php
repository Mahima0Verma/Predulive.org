<?php
include('../z_db.php');
session_start();

if(isset($_POST['submit']))
{
    $name=mysqli_real_escape_string( $con,$_POST['name']) ;
    $email=mysqli_real_escape_string( $con,$_POST['email']) ;
    $subject=mysqli_real_escape_string( $con,$_POST['subject']) ;
    $message=mysqli_real_escape_string( $con,$_POST['message']) ;
   

    $insert_query="INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    $insert_query_run = mysqli_query($con,$insert_query);

    if($insert_query_run)
    {
        $_SESSION['message']="Registered Successfully";
        header('Location: ../thankyou.php');
    }
    else{
        $_SESSION['message']="Something went wrong";
        header('Location: ../contact.php');
    }
}

?>