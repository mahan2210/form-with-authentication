<?php 
session_start();
include "config.php";
if($_SESSION["status"]!="You are logged In!"){
  header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <title>Data Show</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Display Data</a>
            </div>
            <ul class="nav navbar-nav pull-right">
                
                <li><a class="nav-item nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </div>


    </nav>
    <br><br>


  
  





<div class="container my-4">


  <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Serial.No</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Father's Full Name</th>
          <th scope="col">Mother's Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Address</th>
          <th scope="col">Zilla</th>
          <th scope="col">Thana</th>
          <th scope="col">Postal Code</th>
          <th scope="col">Gender</th>
          <th scope="col">Date</th>
          <th scope="col">SSC Passing Institution</th>
          <th scope="col">SSC Board</th>
          <th scope="col">SSC Passing Year</th>
          <th scope="col">SSC GPA</th>
          <th scope="col">HSC Passing Institution</th>
          <th scope="col">HSC Board</th>
          <th scope="col">HSC Passing Year</th>
          <th scope="col">HSC GPA</th>
          <th scope="col">Candidate's Image</th>
          <th scope="col">Candidate's Signature</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>

      <hr>
<?php


$sql = "SELECT * FROM `info`";
$result = mysqli_query($conn, $sql);
//$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {
    // $sno = $sno + 1;
    $image1='<img src="data:image/jpeg;base64,'.base64_encode($row['cand_img']).'" alt="image" style="width:100px; height:100px;"/>';
    $image2='<img src="data:image/jpeg;base64,'.base64_encode($row['cand_sign']).'"alt="image" style="width:100px; height:100px;"/>';
    // echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cand_img']).'"/>';
    echo "<tr>
            <th>" . $row['s_no'] . "</th>
            <td>" . $row['f_name'] . "</td>
            <td>" . $row['l_name'] . "</td>
            <td>" . $row['father_name'] . "</td>
            <td>" . $row['mother_name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['contact'] . "</td>
            <td>" . $row['addr'] . "</td>
            <td>" . $row['zilla'] . "</td>
            <td>" . $row['thana'] . "</td>
            <td>" . $row['postal'] . "</td>
            <td>" . $row['gender'] . "</td>
            <td>" . $row['date'] . "</td>
            <td>" . $row['ssc_inst'] . "</td>
            <td>" . $row['ssc_board'] . "</td>
            <td>" . $row['ssc_pass'] . "</td>
            <td>" . $row['ssc_gpa'] . "</td>
            <td>" . $row['hsc_inst'] . "</td>
            <td>" . $row['hsc_board'] . "</td>
            <td>" . $row['hsc_pass'] . "</td>
            <td>" . $row['hsc_gpa'] . "</td>
            <td >$image1</td>
            <td>$image2</td>
            <form action = 'updatedata.php' method='GET'>
            <input type='hidden' name='s_no' value=" . $row['s_no'] . ">
            <td><button class='edit btn btn-sm btn-success' id=".$row['s_no'].">Edit</button>
            </form>
            
            <form action = 'delete.php' method='GET'>
            <input type='hidden' name='s_no_delete' value=" . $row['s_no'] . ">
            <button name='delete' class='delete btn btn-sm btn-danger' id=".$row['s_no'].">Delete</button></td>
            </form>
            
            
            
            
            
          </tr>";
}
?>
</tbody>
    </table>


  </div>
  <hr>
  <div class="container">

  <form action="form.php">
  <button type="submit" class="btn btn-dark">Insert data! </button>
   </form>
  </div>


  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
  







</body>
</html>











   
    
