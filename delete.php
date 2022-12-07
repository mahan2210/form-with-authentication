<?php 
// ob_start();
session_start();
include "config.php";
if($_SESSION["status"]!="You are logged In!"){
    header("Location: login.php");
  }
  




if(isset($_GET['delete'])){

    $s_no = $_GET['s_no_delete'];
    $sql= "DELETE FROM info WHERE s_no='$s_no'";
    $result = mysqli_query($conn, $sql);
    
    if($result){ 
        
        echo '<script type="text/javascript"> alert("Data Deleted") </script>';
        header("location:datashow.php");
    }
    else{
        echo "The record was not deleted successfully because of this error ---> ". mysqli_error($conn);
    } 


}
// ob_end_flush();
?>
