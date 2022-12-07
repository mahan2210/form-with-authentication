<?php 
session_start();
include "config.php";



if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $_SESSION['status']= false;
    $sql="SELECT * FROM signup WHERE username='$username' AND email='$email'";
    $select=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($select);
    
    

    // if(password_verify($password,$row["password"])) {


    //     // If the password inputs matched the hashed password in the database
    //     // Do something, you know... log them in.
    //     var_dump(1234);
    //     exit();
        
    //     $_SESSION['status']= true;
        
    //     echo '<script>window.location.href="form.php"</script>';
        
    // }
    
    if(password_verify($password,$row["password"])) {


        // If the password inputs matched the hashed password in the database
        // Do something, you know... log them in.
        
        
        $_SESSION['status']= "You are logged In!";
        
        echo '<script>window.location.href="form.php"</script>';
        
    }
    
    if(is_array($row)){
       $_SESSION["username"]= $row["username"];
        $_SESSION["email"]= $row["email"];
        
        $_SESSION["password"]= $row["password"];
        
        

    }else{
        
        $_SESSION['status']= "Incorrect Username or email or password";

         
       header("Location: login.php");
    //    echo '<script>alert("Incorrect Username or email or password")</script>';
    //    echo '<script>window.location.href="login.php"</script>';
      

    }
    
}
// if(password_verify($password, $hashed_password)) {
//     // If the password inputs matched the hashed password in the database
//     // Do something, you know... log them in.
//     //$_SESSION['status']= true;
//     var_dump(password_verify());
//     exit();
//     echo '<script>window.location.href="form.php"</script>';
    
// }

// if(isset($_SESSION["username"])){

//     //header("Location:form.php");
//     $_SESSION['status']= true;
//     echo '<script>window.location.href="form.php"</script>';
    
// }





?>