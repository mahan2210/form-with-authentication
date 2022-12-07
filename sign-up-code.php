<?php 
session_start();
include "config.php";
 if(isset($_POST['signup_btn']))
 {
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $hashed_password = password_hash($password, PASSWORD_DEFAULT);
     
     $c_password = $_POST['confirm_password'];
     $hashed_c_password = password_hash($c_password, PASSWORD_DEFAULT);

    $emailquery = "SELECT * FROM signup WHERE email='$email'";
    $check_email = mysqli_query($conn, $emailquery);
    $unamequery = "SELECT * FROM signup WHERE username='$username'";
    $check_uname = mysqli_query($conn, $unamequery);

    // if($username=="" OR $email="" OR $password="" OR $password="" OR $c_password=""){
    //     $_SESSION['status']= "<div class='alert alert-danger'><strong>Error!</strong>Field must not be empty</div>";
    // }
    

    if(mysqli_num_rows($check_email)>0)
    {
        $_SESSION['status']= "Email already exists!";
        header("Location: index.php");
    }
    if(mysqli_num_rows($check_uname)>0)
    {
        $_SESSION['status']= "Username already exists!";
        header("Location: index.php");
    }
    else{
        
        if($password == $c_password)
        {
            $reg_query= "INSERT INTO `signup` (`username`, `email`,`password`) VALUES ('$username', '$email','$hashed_password')";
            $reg_query_run = mysqli_query($conn, $reg_query);

            if($reg_query_run)
            {
                $_SESSION['status']= "You are logged In!";;
                header("Location: form.php");
            }else{
                $_SESSION['status']="Something went wrong";

            }
        }
        
        else{
            $_SESSION['status']=  "Password  and confirm password doesnot match";
            header("Location: index.php");
        }
    }

 }





?>