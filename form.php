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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
    <link rel="stylesheet" href="css/style.css" />
    

    <title>Form</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Admission Form</a>
            </div>
            <ul class="nav navbar-nav pull-right">
                
                <li><a class="nav-item nav-link" href="logout.php">Log Out</a></li>
            </ul>
        </div>


    </nav>
    <br><br>
    <div class="container">
    <?php 
                            if(isset($_SESSION['status']) && $_SESSION['status']!='')
                            {
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hello!</strong> <?php echo $_SESSION['status']   ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <?php
                                // unset($_SESSION['status']);

                            }
                            ?>

          <div class="info">

              <form id="myform" action="datainsert.php" enctype="multipart/form-data" method="POST" >
                <h2 class="text-center">Personal Information</h2>
                <section>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="firstnames">First Name</label>
                      <input type="text" name="fname" id="firstnames" class="form-control" placeholder="First Name">

                    </div>
                    <div class="form-group col-md-6">
                      <label for="lastname">Last Name</label>
                      <input type="text" name="lname" id="lastname" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputfname">Father's Full Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="inputfname"
                        placeholder="Father's Name"
                        name="fn" 
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputmname">Mother's Full Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="inputmname"
                        placeholder="Mother's Name"
                        name="mn" 
                      />
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" name="email" id="email"  class="form-control" placeholder="Enter your email">
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
                        placeholder="Contact number"
                        name="phone"
                        onkeyup="return validcon(this.value);" 
                      />
                    </div>
                  </div>
                  <div class="form-group1">
                    <label for="inputAddress">Address</label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputAddress"
                      placeholder="Local Address"
                      name="addr"
                    />
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Zilla</label>
                      <select name="zilla" id="inputCity" class="form-control">
                        <option disabled selected>Choose Zilla</option>
                        <option>Dhaka</option>
                        <option>Khulna</option>
                        <option>Chattogram</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Thana</label>
                      <select name="thana" id="inputState" class="form-control">
                        <option disabled selected>Choose Thana</option>
                        <option>Pallabi</option>
                        <option>Paltan</option>
                        <option>Gulshan</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputPost">Postal Code</label>
                      <input name="postal" type="text" class="form-control" id="inputPost" placeholder="Postal Code" />
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputgender">Gender</label>
                      <div>
                        <select aria-label="label for the select" id="inputgenders" class="form-control" name="gen">
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
                        <input type="text" class="form-control" id="datepicker" name="det" min="2020-10-13" max="2022-12-18" placeholder="Place the date"/>
                        <span class="input-group-append" >
                          <!-- <span class="input-group-text bg-white d-block">
                              <i class="fa fa-calendar" ></i>
                          </span> -->
                      </span>
                      </div>
                    </div>
                  </div>
                  <br /> <br />


                </section>
                
                <h2 class="text-center">Academic Information</h2>
                <section>
                      <br />
                      <h5>SSC Information</h5>
                      <div class="form-group1">
                        <label for="inputInst1">Passing Institution</label>
                        <input
                          type="text"
                          class="form-control"
                          id="inputInst1"
                          placeholder="Passing Institution"
                          name="inst1" 
                        />
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputBoard">Board</label>
                          <select name="board1" id="inputBoard" class="form-control" >
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
                            placeholder="Passing Year" 
                          />
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputGPA">GPA</label>
                          <input
                            type="number"
                            class="form-control"
                            id="inputGPA2"
                            name="gpa1"
                            placeholder="Enter GPA" 
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
                          placeholder="Passing Institution"
                          name="inst2" 
                        />
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inputBoard2">Board</label>
                          <select name="board2" id="inputBoard2" class="form-control">
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
                            placeholder="Passing Year" 
                          />
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputGPA">GPA</label>
                          <input
                            type="number"
                            class="form-control"
                            id="inputGPA"
                            name="gpa2"
                            placeholder="Enter GPA" 
                          />
                        </div>
                      </div>
                      <br />
                </section>
                
                
                <h2>Validation</h2>
                <section>
                    <div class="form-row">
                      <div class="form-group1 col-md-6">
                        <div>
                          <label for="formFile_1" class="form-label"
                            >Upload Image of Candidate</label
                          >
                          <input
                            class="form-control"
                            type="file"
                            
                            id="formFile_1"
                            name="formFile_1"

                          />
                          <button onclick="clearImage()" class="btn btn-secondary mt-3">
                            Reset
                          </button>
                        </div>
                        <img id="frame" src="" class="img-fluid" />
                      </div>
                      <div class="form-group1 col-md-6">
                        <div class="mb-5">
                          <label for="formFile_2" class="form-label"
                            >Upload Image of Candidate's Signature</label
                          >

                          <input
                            class="form-control"
                            type="file"
                            
                            id="formFile_2"
                            name="formFile_2"
                          />
                          <button onclick="clearImage()" class="btn btn-secondary mt-3">
                            Reset
                          </button>
                        </div>
                        <img id="frame" src="" class="img-fluid"/>
                      </div>
                    </div>

                    <button type="submit" id="Form" name="submit" class="btn btn-primary" value="validate">Submit</button>


                </section>
                
              </form>


          </div>

  </div>

    
  

  
 
  
 

  <!-- <script>
  // just for the demos, avoids form submit
  jQuery('#myform').validate({
  rules:{
    fname: "",
    email:"",
    lname:"",
    zilla:"",
    addr:{
      :true,
      minlength:10
    },
  },messages:{

    fname:"Please enter your first Name",
    email:"Email is ",

    addr:{
      :"Enter your Address",
      minlength:"Address should be 10 character long"
    },
    field: {
        : true,
        extension: "png|jpg|jpeg|"
      },
      formFile: {
        : true,
        extension: "png|jpg|jpeg|"
      }
  },
  submitHandler:function(form){
    form.submit();
  }
});
  </script> -->




  
  
 


  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="JS/jquery.steps.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script>

<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->

<script src="JS/jquery.steps.js"></script>
<script src="js/script.js"></script>




  </body>
</html>



