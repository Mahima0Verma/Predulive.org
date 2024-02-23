<?php
include('../z_db.php');
session_start();

if(isset($_POST['submit']))
{
    $n1=mysqli_real_escape_string( $con,$_POST['n1']) ;
    $n2=mysqli_real_escape_string( $con,$_POST['n2']) ;
    $n3=mysqli_real_escape_string( $con,$_POST['n3']) ;
    $n4=mysqli_real_escape_string( $con,$_POST['n4']) ;
    $n5=mysqli_real_escape_string( $con,$_POST['n5']) ;
    $n6=mysqli_real_escape_string( $con,$_POST['n6']) ;
    $n7=mysqli_real_escape_string( $con,$_POST['n7']) ;

    $n8=mysqli_real_escape_string( $con,$_POST['n8']) ;
    $n9=mysqli_real_escape_string( $con,$_POST['n9']) ;
    $n10=mysqli_real_escape_string( $con,$_POST['n10']) ;
    $n11=mysqli_real_escape_string( $con,$_POST['n11']) ;
    $n12=mysqli_real_escape_string( $con,$_POST['n12']) ;
    $n13=mysqli_real_escape_string( $con,$_POST['n13']) ;
    $n14=mysqli_real_escape_string( $con,$_POST['n14']) ;

    $n15=mysqli_real_escape_string( $con,$_POST['n15']) ;
    $n16=mysqli_real_escape_string( $con,$_POST['n16']) ;
    $n17=mysqli_real_escape_string( $con,$_POST['n17']) ;
    $n18=mysqli_real_escape_string( $con,$_POST['n18']) ;
    $n19=mysqli_real_escape_string( $con,$_POST['n19']) ;
    $n20=mysqli_real_escape_string( $con,$_POST['n20']) ;
    $n21=mysqli_real_escape_string( $con,$_POST['n21']) ;

    $n22=mysqli_real_escape_string( $con,$_POST['n22']) ;
    $n23=mysqli_real_escape_string( $con,$_POST['n23']) ;
    $n24=mysqli_real_escape_string( $con,$_POST['n24']) ;
    $n25=mysqli_real_escape_string( $con,$_POST['n25']) ;
    $n26=mysqli_real_escape_string( $con,$_POST['n26']) ;
    $n27=mysqli_real_escape_string( $con,$_POST['n27']) ;
    $n28=mysqli_real_escape_string( $con,$_POST['n28']) ;

    $n29=mysqli_real_escape_string( $con,$_POST['n29']) ;
    $n30=mysqli_real_escape_string( $con,$_POST['n30']) ;
    $n31=mysqli_real_escape_string( $con,$_POST['n31']) ;
    $n32=mysqli_real_escape_string( $con,$_POST['n32']) ;
   
   

    $insert_query="INSERT INTO apply (n1,n2,n3,n4,n5,n6,n7,n8,n9,n10,n11,n12,n13,n14,n15,n16,n17,n18,n19,n20,n21,n22,n23,n24,n25,n26,n27,n28,n29,n30,n31,n32) VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12','$n13','$n14','$n15','$n16','$n17','$n18','$n19','$n20','$n21','$n22','$n23','$n24','$n25','$n26','$n27','$n28','$n29','$n30','$n31','$n32')";
    $insert_query_run = mysqli_query($con,$insert_query);

    if($insert_query_run)
    {
        $_SESSION['message']="Registered Successfully";
        header('Location: ../thankyou.php');
    }
    else{
        $_SESSION['message']="Something went wrong";
        header('Location: ../apply.php');
    }
}

?>