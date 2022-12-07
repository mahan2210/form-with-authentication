<?php 
session_start();

if($_SESSION["status"]!="You are logged In!"){
  header("Location: login.php");
}

$insert = false;
include "config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  

    
    $f_name = mysqli_real_escape_string($conn,$_POST['fname']);
    $l_name = mysqli_real_escape_string($conn, $_POST['lname']);
    $father_name= mysqli_real_escape_string($conn, $_POST['fn']);
    $mother_name= mysqli_real_escape_string($conn, $_POST['mn']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $contact= mysqli_real_escape_string($conn, $_POST['phone']);
    $addr= mysqli_real_escape_string($conn, $_POST['addr']);
    $zilla= mysqli_real_escape_string($conn, $_POST['zilla']);
    $thana= mysqli_real_escape_string($conn, $_POST['thana']);
    $postal= mysqli_real_escape_string($conn, $_POST['postal']);
    $gender= mysqli_real_escape_string($conn, $_POST['gen']);
    $date= date('Y-m-d', strtotime($_POST['det']));
    $ssc_inst= mysqli_real_escape_string($conn, $_POST['inst1']);
    $ssc_board= mysqli_real_escape_string($conn, $_POST['board1']);
    $ssc_pass= mysqli_real_escape_string($conn, $_POST['year1']);
    $ssc_gpa= mysqli_real_escape_string($conn, $_POST['gpa1']);
    $hsc_inst= mysqli_real_escape_string($conn, $_POST['inst2']);
    $hsc_board= mysqli_real_escape_string($conn, $_POST['board2']);
    $hsc_pass= mysqli_real_escape_string($conn, $_POST['year2']);
    $hsc_gpa= mysqli_real_escape_string($conn, $_POST['gpa2']);
    if(isset($_FILES['formFile_1'])){
      
      $filename_1=$_FILES['formFile_1']['name'];
      $temp_1=$_FILES['formFile_1']['tmp_name'];
    }else{
      echo "1st Photo Upload failed";
    }

    $file_path_1 = "./image/" . $filename_1;

    if (move_uploaded_file($temp_1, $file_path_1)) {
      echo "<h3>  1st Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to 1st upload image!</h3>";
    }

    if(isset($_FILES['formFile_2'])){
      
      $filename_2=$_FILES['formFile_2']['name'];
      $temp_2=$_FILES['formFile_2']['tmp_name'];

    }else{
      echo "2nd Photo Upload failed";
    }
    $file_path_2 = "./image/" . $filename_2;

    if (move_uploaded_file($temp_2, $file_path_2)) {
      echo "<h3>2nd Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload 2nd image!</h3>";
    }


    $cand_img= addslashes(file_get_contents($file_path_1));
   
    $cand_sign= addslashes(file_get_contents($file_path_2));
    
    

  // Sql query to be executed
  $sql = "INSERT INTO `info` (`f_name`, `l_name`,`father_name`,`mother_name`,`email`,`contact`,`addr`,`zilla`,`thana`,`postal`,`gender`,`date`,`ssc_inst`,`ssc_board`,`ssc_pass`,`ssc_gpa`,`hsc_inst`,`hsc_board`,`hsc_pass`,`hsc_gpa`,`cand_img`,`cand_sign`) VALUES ('$f_name', '$l_name','$father_name','$mother_name','$email','$contact','$addr','$zilla','$thana','$postal','$gender','$date','$ssc_inst','$ssc_board','$ssc_pass','$ssc_gpa','$hsc_inst','$hsc_board','$hsc_pass','$hsc_gpa','$cand_img','$cand_sign')";
  $result = mysqli_query($conn, $sql);

  if($result){ 
    $insert= true;
    echo '<script type="text/javascript"> alert("Information Inserted") </script>';
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
} 
  
 }






?>

<form action="datashow.php">


<button type="submit" name="submit" class="btn btn-success" value="validate">View</button>

</form>

