<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <title>Data Show</title>
</head>
<body>

<!-- edit trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
  Edit modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Records</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="myform" novalidate action="datainsert.php" enctype="multipart/form-data" method="POST" >
          <h2 class="text-center">Personal Information</h2>
          <br />
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstnamesEdit">First Name</label>
              <input type="text" name="fnameEdit" id="firstnamesEdit" class="form-control" placeholder="First Name">

            </div>
            <div class="form-group col-md-6">
              <label for="lastnameEdit">Last Name</label>
              <input type="text" name="lnameEdit" id="lastnameEdit" class="form-control" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputfnameEdit">Father's Full Name</label>
              <input
                type="text"
                class="form-control"
                id="inputfnameEdit"
                placeholder="Father's Name"
                name="fnEdit" required
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputmnameEdit">Mother's Full Name</label>
              <input
                type="text"Edit
                class="form-control"
                id="inputmnameEdit"
                placeholder="Mother's Name"
                name="mnEdit" required
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="emailEdit">Email</label>
              <input type="email" name="emailEdit" id="emailEdit" required class="form-control" placeholder="Enter your email">
                    <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                        Your email must be a valid email
                    </small>
            </div>
            <div class="form-group col-md-6">
              <label for="inputContactEdit">Contact number</label>
              <input
                type="text"
                class="form-control"
                id="inputContactEdit"
                placeholder="Contact number"
                name="phoneEdit"
                onkeyup="return validcon(this.value);" required
              />
            </div>
          </div>
          <div class="form-group1">
            <label for="inputAddressEdit">Address</label>
            <input
              type="text"
              class="form-control"
              id="inputAddressEdit"
              placeholder="Local Address"
              name="addrEdit"
            />
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCityEdit">Zilla</label>
              <select name="zillaEdit" id="inputCityEdit" class="form-control">
                <option disabled selected>Choose Zilla</option>
                <option>Dhaka</option>
                <option>Khulna</option>
                <option>Chattogram</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputStateEdit">Thana</label>
              <select name="thanaEdit" id="inputStateEdit" class="form-control">
                <option disabled selected>Choose Thana</option>
                <option>Pallabi</option>
                <option>Paltan</option>
                <option>Gulshan</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputPostEdit">Postal Code</label>
              <input name="postalEdit" type="text" class="form-control" id="inputPostEdit" placeholder="Postal Code" required/>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputgendersEdit">Gender</label>
              <div>
                <select aria-label="label for the select" id="inputgendersEdit" class="form-control" name="genEdit">
                  <option disabled selected>Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">Other</option>
                </select>
              </div>
            </div>

            <div class="form-group col-md-6">
              <label for="datepicker">Date</label>

              <div class="input-group date">
                <input type="text" class="form-control" id="datepicker" name="detEditEdit" min="2020-10-13" max="2022-12-18" placeholder="Place the date"/>
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
            <label for="inputInst1Edit">Passing Institution</label>
            <input
              type="text"
              class="form-control"
              id="inputInst1Edit"
              placeholder="Passing Institution"
              name="inst1Edit" required
            />
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputBoardEdit">Board</label>
              <select name="board1Edit" id="inputBoardEdit" class="form-control" >
                <option disabled selected>Choose Board</option>
                <option>Dhaka</option>
                <option>Jessore</option>
                <option>Barishal</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputYearEdit">Passing Year</label>
              <input
                type="text"
                class="form-control"
                id="inputYearEdit"
                name="year1Edit"
                placeholder="Passing Year" required
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputGPA1">GPA</label>
              <input
                type="number"
                class="form-control"
                id="inputGPA1Edit"
                name="gpa1Edit"
                placeholder="Enter GPA" required
              />
            </div>
          </div>
          <br />
          <h5>HSC Information</h5>
          <div class="form-group1">
            <label for="inputInst2Edit">Passing Institution</label>
            <input
              type="text"
              class="form-control"
              id="inputInst2Edit"
              placeholder="Passing Institution"
              name="inst2Edit" required
            />
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputBoard2Edit">Board</label>
              <select name="board2Edit" id="inputBoard2Edit" class="form-control">
                <option disabled selected>Choose Board</option>
                <option>Dhaka</option>
                <option>Jessore</option>
                <option>Barishal</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputYear2Edit">Passing Year</label>
              <input
                type="text"
                class="form-control"
                id="inputYear2Edit"
                name="year2Edit"
                placeholder="Passing Year" required
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputGPA2Edit">GPA</label>
              <input
                type="number"
                class="form-control"
                id="inputGPA2Edit"
                name="gpa2Edit"
                placeholder="Enter GPA" required
              />
            </div>
          </div>

          <br />

          <h5>Validation</h5>
          <div class="form-row">
            <div class="form-group1 col-md-6">
              <div>
                <label for="formFile_1Edit" class="form-label"
                  >Upload Image of Candidate</label
                >
                <input
                  class="form-control"
                  type="file"
                  id="formFile_1Edit"
                  name="formFile_1Edit"

                />
                <button onclick="clearImage()" class="btn btn-secondary mt-3">
                  Reset
                </button>
              </div>
              <!-- <img id="frame" src="" class="img-fluid" /> -->
            </div>
            <div class="form-group1 col-md-6">
              <div class="mb-5">
                <label for="formFile_2Edit" class="form-label"
                  >Upload Image of Candidate's Signature</label
                >

                <input
                  class="form-control"
                  type="file"
                  id="formFile_2Edit"
                  name="formFile_2Edit"
                />
                <button onclick="clearImage()" class="btn btn-secondary mt-3">
                  Reset
                </button>
              </div>
              <!-- <img id="frame" src="" class="img-fluid"/> -->
            </div>
          </div>

          <button type="submit" id="Form" name="submit" class="btn btn-primary" value="validate">Submit</button>
        </form>  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
  
<?php 

include "config.php";
?>




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
$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $sno = $sno + 1;
    $image1='<img src="data:image/jpeg;base64,'.base64_encode($row['cand_img']).'" alt="image" style="width:100px; height:100px;"/>';
    $image2='<img src="data:image/jpeg;base64,'.base64_encode($row['cand_sign']).'"alt="image" style="width:100px; height:100px;"/>';
    // echo '<img src="data:image/jpeg;base64,'.base64_encode($row['cand_img']).'"/>';
    echo "<tr>
            <th scope='row'>" . $sno . "</th>
            <td>" . $row['f_name'] . "</td>
            <td>" . $row['l_name'] . "</td>
            <td>" . $row['father name'] . "</td>
            <td>" . $row['mother name'] . "</td>
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
            <td><button class='edit btn btn-sm btn-success' id=".$row['s.no'].">Edit</button><button class='delete btn btn-sm btn-danger' data-toggle='modal' data-target='#editModal' id=d".$row['s.no'].">Delete</button>  </td>
            
            
            
            
          </tr>";
}
?>
</tbody>
    </table>


  </div>
  <hr>
  <div class="container">

  <form action="index.php">
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
  




<script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit");
        tr = e.target.parentNode.parentNode;
        First_Name = tr.getElementsByTagName("td")[0].innerText;
        Last_Name = tr.getElementsByTagName("td")[1].innerText;
        Father_Name=tr.getElementsByTagName("td")[2].innerText;
        Mother_Name=tr.getElementsByTagName("td")[3].innerText;
        Email=tr.getElementsByTagName("td")[4].innerText;
        Contact=tr.getElementsByTagName("td")[5].innerText;
        Address=tr.getElementsByTagName("td")[6].innerText;
        Zilla=tr.getElementsByTagName("td")[7].innerText;
        Thana=tr.getElementsByTagName("td")[8].innerText;
        Postal=tr.getElementsByTagName("td")[9].innerText;
        Gender=tr.getElementsByTagName("td")[10].innerText;
        Date=tr.getElementsByTagName("td")[11].innerText;
        ssc_inst=tr.getElementsByTagName("td")[12].innerText;
        ssc_board=tr.getElementsByTagName("td")[13].innerText;
        ssc_passing_year=tr.getElementsByTagName("td")[14].innerText;
        ssc_gpa=tr.getElementsByTagName("td")[15].innerText;
        hsc_inst=tr.getElementsByTagName("td")[16].innerText;
        hsc_board=tr.getElementsByTagName("td")[17].innerText;
        hsc_passing_year=tr.getElementsByTagName("td")[18].innerText;
        hsc_gpa=tr.getElementsByTagName("td")[19].innerText;
        cand_img=tr.getElementsByTagName("td")[20].innerText;
        cand_sign=tr.getElementsByTagName("td")[21].innerText;


        console.log(First_Name,Last_Name,Father_Name,Mother_Name,Email,Contact,Address,Zilla,Thana,Postal, Gender,Date,ssc_inst,ssc_board,ssc_passing_year,ssc_gpa,hsc_inst,hsc_board,hsc_passing_year,hsc_gpa,cand_img,cand_sign);
        firstnamesEdit.value=  First_Name
        lastnameEdit.value= Last_Name
        inputfnameEdit.value= Father_Name
        inputmnameEdit.value= Mother_Name
        emailEdit.value= Email
        inputContactEdit.value= Contact
        inputAddressEdit.value= Address
        inputCityEdit.value= Zilla
        inputStateEdit.value= Thana
        inputPostEdit.value= Postal
        inputgendersEdit.value=Gender
        datepicker.value= Date
        inputInst1Edit.value= ssc_inst
        inputBoardEdit.value= ssc_board
        inputYearEdit.value= ssc_passing_year
        inputGPA1Edit.value= ssc_gpa
        inputInst2Edit.value=hsc_inst
        inputBoard2Edit.value=hsc_board
        inputYear2Edit.value=hsc_passing_year
        inputGPA2Edit.value=hsc_gpa
        formFile_1Edit.value=cand_img
        formFile_2Edit.value=cand_sign

        $('#editModal').modal('toggle')

        
        // titleEdit.value = title;
        // descriptionEdit.value = description;
        // snoEdit.value = e.target.id;
        // console.log(e.target.id)
       
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/crud/index.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>


</body>
</html>











   
    
