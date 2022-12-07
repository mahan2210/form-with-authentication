

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Update</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Update Data</a>
            </div>
            <ul class="nav navbar-nav pull-right">
                <li><a class="nav-item nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </div>


    </nav>
    <br><br>
<?php 
session_start();
ob_start();
include "config.php";
if($_SESSION["status"]!="You are logged In!"){
  header("Location: login.php");
}



$s_no = $_GET['s_no'];
$sql= "SELECT * FROM `info` WHERE s_no='$s_no'";
$result = mysqli_query($conn, $sql);

if($result)
{
    while ($row = mysqli_fetch_assoc($result)) 
    { 

        

        ?>

            <div class="container">
            <div class="jumbotron">
            <h2>PHP- CRUD: UPDATE DATA</h2>
            <hr>
            <form id="myform" novalidate action="" enctype="multipart/form-data" method="POST" >
          <h2 class="text-center">Personal Information</h2>
          <br />
          <input type="hidden" name="s_no" value="<?php echo $row['s_no'] ?>">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstnames">First Name</label>
              <input type="text" name="fname" id="firstnames" class="form-control" value="<?php echo $row['f_name'] ?>" placeholder="First Name">

            </div>
            <div class="form-group col-md-6">
              <label for="lastname">Last Name</label>
              <input type="text" name="lname" id="lastname" class="form-control" value="<?php echo $row['l_name'] ?>" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputfname">Father's Full Name</label>
              <input
                type="text"
                class="form-control"
                id="inputfname"
                value="<?php echo $row['father_name'] ?>"
                placeholder="Father Full Name"
                name="fn" required
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputmname">Mother's Full Name</label>
              <input
                type="text"
                class="form-control"
                id="inputmname"
                value="<?php echo $row['mother_name'] ?>"
                placeholder="Mother Full Name"
                name="mn" required
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" name="email" id="email" required class="form-control" value="<?php echo $row['email'] ?>" placeholder="Enter your email">
                    <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                        Your email must be a valid email
                    </small>
            </div>
            <div class="form-group col-md-6">
              <label for="inputContact">Contact number</label>
              <input
                type="text"
                class="form-control"
                id="inputContact"
                value="<?php echo $row['contact'] ?>"
                placeholder="Contact number"
                name="phone"
                onkeyup="return validcon(this.value);" required
              />
            </div>
          </div>
          <div class="form-group1">
            <label for="inputAddress">Address</label>
            <input
              type="text"
              class="form-control"
              id="inputAddress"
              value="<?php echo $row['addr'] ?>"
              placeholder="Local Address"
              name="addr"
            />
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Zilla</label>
              <select name="zilla" id="inputCity" value="<?php echo $row['zilla'] ?>" class="form-control">
                <option disabled selected>Choose Zilla</option>
                <option>Dhaka</option>
                <option>Khulna</option>
                <option>Chattogram</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Thana</label>
              <select name="thana" id="inputState" value="<?php echo $row['thana'] ?>" class="form-control">
                <option disabled selected>Choose Thana</option>
                <option>Pallabi</option>
                <option>Paltan</option>
                <option>Gulshan</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputPost">Postal Code</label>
              <input name="postal" type="text" class="form-control" id="inputPost" value="<?php echo $row['postal'] ?>" placeholder="Postal Code" required/>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputgender">Gender</label>
              <div>
                <select aria-label="label for the select" id="inputgenders" value="<?php echo $row['gender'] ?>" class="form-control" name="gen">
                  <option disabled selected>Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="datepicker">Date</label>

              <div class="input-group date">
                <input type="text" class="form-control" id="datepicker" value="<?php echo $row['date'] ?>" name="det" min="2020-10-13" max="2022-12-18" placeholder="Place the date"/>
                <span class="input-group-append" >
                  <!-- <span class="input-group-text bg-white d-block">
                      <i class="fa fa-calendar" ></i>
                  </span> -->
              </span>
              </div>
            </div>
          </div>
          <!-- <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" />
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
            </div> -->
            <br />
            <h2 class="text-center">Academic Information</h2>
            <br />
            <h5>SSC Information</h5>
            <div class="form-group1">
                <label for="inputInst1">Passing Institution</label>
                <input
                type="text"
                class="form-control"
                id="inputInst1"
                placeholder="Passing Institution"
                value="<?php echo $row['ssc_inst'] ?>"
                name="inst1" required
                />
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputBoard">Board</label>
                <select name="board1" id="inputBoard" value="<?php echo $row['ssc_board'] ?>" class="form-control" >
                    <option disabled selected>Choose Board</option>
                    <option>Dhaka</option>
                    <option>Jessore</option>
                    <option>Barishal</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label for="inputYear">Passing Year</label>
                <input
                    type="text"
                    class="form-control"
                    id="inputYear"
                    name="year1"
                    value="<?php echo $row['ssc_pass'] ?>"
                    placeholder="Passing Year" required
                />
                </div>
                <div class="form-group col-md-4">
                <label for="inputGPA">GPA</label>
                <input
                    type="number"
                    class="form-control"
                    id="inputGPA2"
                    name="gpa1"
                    value="<?php echo $row['ssc_gpa'] ?>"
                    placeholder="Enter GPA" required
                />
                </div>
            </div>
            <br />
            <h5>HSC Information</h5>
            <div class="form-group1">
                <label for="inputInst2">Passing Institution</label>
                <input
                type="text"
                class="form-control"
                id="inputInst2"
                value="<?php echo $row['hsc_inst'] ?>"
                placeholder="Passing Institution"
                name="inst2" required
                />
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputBoard2">Board</label>
                <select name="board2" id="inputBoard2" value="<?php echo $row['hsc_board'] ?>" class="form-control">
                    <option disabled selected>Choose Board</option>
                    <option>Dhaka</option>
                    <option>Jessore</option>
                    <option>Barishal</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label for="inputYear">Passing Year</label>
                <input
                    type="text"
                    class="form-control"
                    id="inputYear1"
                    name="year2"
                    value="<?php echo $row['hsc_pass'] ?>"
                    placeholder="Passing Year" required
                />
                </div>
                <div class="form-group col-md-4">
                <label for="inputGPA">GPA</label>
                <input
                    type="number"
                    class="form-control"
                    id="inputGPA"
                    name="gpa2"
                    value="<?php echo $row['hsc_gpa'] ?>"
                    placeholder="Enter GPA" required
                />
                </div>
            </div>

            <br />

            <h5>Validation</h5>
            <div class="form-row">
                <div class="form-group1 col-md-6">
                <div>
                    <label for="formFile_1" class="form-label"
                    >Upload Image of Candidate</label
                    >
                    <input
                    class="form-control"
                    type="file"
                    name="formFile_1"
                    id="formFile_1"
                    value="<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cand_img']).'" alt="image" style="width:100px; height:100px;"'?>"
                    

                    />
                    <button onclick="clearImage()" class="btn btn-secondary mt-3">
                    Reset
                    </button>
                </div>
                <!-- <img id="frame" src="" class="img-fluid" /> -->
                </div>
                <div class="form-group1 col-md-6">
                <div class="mb-5">
                    <label for="formFile_2" class="form-label"
                    >Upload Image of Candidate's Signature</label
                    >

                    <input
                    class="form-control"
                    type="file"
                    name="formFile_2"
                    id="formFile_2"
                    value="<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cand_sign']).'"alt="image" style="width:100px; height:100px;"' ?>"/>
                    <button onclick="clearImage()" class="btn btn-secondary mt-3">
                    Reset
                    </button>
                </div>
                <!-- <img id="frame" src="" class="img-fluid"/> -->
                </div>
            </div>

          <button type="submit" id="Form" name="update" class="btn btn-success" value="validate">Update</button>
          <a href="datashow.php" class="btn btn-danger">Cancel</a>
        </form>
<?php 
if (isset($_POST['update'])){
  

    
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
  $sql = "UPDATE info SET f_name='$f_name',l_name='$l_name',father_name='$father_name',mother_name='$mother_name',email='$email',contact='$contact',addr='$addr',zilla='$zilla',thana='$thana',postal='$postal',gender='$gender',date='$date',ssc_inst='$ssc_inst',ssc_board='$ssc_board',ssc_pass='$ssc_pass',ssc_gpa='$ssc_gpa',hsc_inst='$hsc_inst',hsc_board='$hsc_board',hsc_pass='$hsc_pass',hsc_gpa='$hsc_gpa',cand_img='$cand_img',cand_sign='$cand_sign' WHERE s_no='$s_no'";
  $result = mysqli_query($conn, $sql);
  
  if($result){ 
   
    echo '<script type="text/javascript"> alert("Information Updated") </script>';
    header("location:datashow.php");
    
}
else{
    echo "The record was not updated successfully because of this error ---> ". mysqli_error($conn);
} 
  
 }




?>




</div>



</div>


        <?php

}

}else{
    echo '<script> alert("No record found");</script>';

}
ob_end_flush();
?>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="js/scriptEdit.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script>
  <script src="js/scriptEdit.js"></script>






</body>
</html>