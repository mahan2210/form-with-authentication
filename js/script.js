// $(document).ready(function () {
//     // Validate Username
//     $("#usercheck").hide();
//     let usernameError = true;
//     $("#usernames").keyup(function () {
//       validateUsername();
//     });
   
//     function validateUsername() {
//       let usernameValue = $("#usernames").val();
//       if (usernameValue.length == "") {
//         $("#usercheck").show();
//         usernameError = false;
//         return false;
//       } else if (usernameValue.length < 3 || usernameValue.length > 10) {
//         $("#usercheck").show();
//         $("#usercheck").html("**length of username must be between 3 and 10");
//         usernameError = false;
//         return false;
//       } else {
//         $("#usercheck").hide();
//       }
//     }
   
//     // Validate Email
//     const email = document.getElementById("email");
//     email.addEventListener("blur", () => {
//       let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
//       let s = email.value;
//       if (regex.test(s)) {
//         email.classList.remove("is-invalid");
//         emailError = true;
//       } else {
//         email.classList.add("is-invalid");
//         emailError = false;
//       }
//     });
   
//     // Validate Password
//     $("#passcheck").hide();
//     let passwordError = true;
//     $("#password").keyup(function () {
//       validatePassword();
//     });
//     function validatePassword() {
//       let passwordValue = $("#password").val();
//       if (passwordValue.length == "") {
//         $("#passcheck").show();
//         passwordError = false;
//         return false;
//       }
//       if (passwordValue.length < 3 || passwordValue.length > 10) {
//         $("#passcheck").show();
//         $("#passcheck").html(
//           "**length of your password must be between 3 and 10"
//         );
//         $("#passcheck").css("color", "red");
//         passwordError = false;
//         return false;
//       } else {
//         $("#passcheck").hide();
//       }
//     }
   
//     // Validate Confirm Password
//     $("#conpasscheck").hide();
//     let confirmPasswordError = true;
//     $("#conpassword").keyup(function () {
//       validateConfirmPassword();
//     });
//     function validateConfirmPassword() {
//       let confirmPasswordValue = $("#conpassword").val();
//       let passwordValue = $("#password").val();
//       if (passwordValue != confirmPasswordValue) {
//         $("#conpasscheck").show();
//         $("#conpasscheck").html("**Password didn't Match");
//         $("#conpasscheck").css("color", "red");
//         confirmPasswordError = false;
//         return false;
//       } else {
//         $("#conpasscheck").hide();
//       }
//     }
   
//     // Submit button
//     $("#submitbtn").click(function () {
//       validateUsername();
//       validatePassword();
//       validateConfirmPassword();
//       validateEmail();
//       if (
//         usernameError == true &&
//         passwordError == true &&
//         confirmPasswordError == true &&
//         emailError == true
//       ) {
//         return true;
//       } else {
//         return false;
//       }
//     });
//   });

/*jQuery('#myform').validate({
  rules:{
    fname: "required",
    email:"required",
    lname:"required",
    addr:{
      required:true,
      minlength:10
    },
  },messages:{

    fname:"Please enter your first Name",
    email:"It is required",
    lname:"It is required",
    addr:{
      required:"Enter your last name",
      minlength:"password should be 10 character long"
    },
  },
  submitHandler:function(form){
    form.submit();
  }
});*/

// jQuery.validator.setDefaults({
//   debug: true,
//   success: "valid"
// });
// $( "#myform" ).validate({
//   rules: {
//     field: {
//       required: true,
//       extension: "png|jpg|jpeg|"
//     },
//     formFile: {
//       required: true,
//       extension: "png|jpg|jpeg|"
//     },
//     fname:{
//       required:true,
//       minlength:10
//     },

//   }
// });

// jQuery.validator.setDefaults({
//   debug: true,
//   success: "valid"
// });
// $( "#myform" ).validate({
//   rules: {
//     field: {
//       required: true,
//       extension: "png|jpg|jpeg|"
//     },
//     formFile: {
//       required: true,
//       extension: "png|jpg|jpeg|"
//     },
//     fname:{
//     required:true,
//     minlength:10
//   },
//   }
// });


// ------------------------------------validate code Start----------------------------------------






jQuery.validator.setDefaults({
	
	success: "valid"
});

$( "#myform" ).validate({
  rules: {
      
    formFile_1: {
      required: true,
      extension: "png|jpg|jpeg"
    },
    zilla:{
      required:true
    },
    thana:{
      required:true
    },
    gen:{
      required:true
    },
    board1:{
      required:true
    },
    board2:{
      required:true
    },
    postal:{
      number:true,
      required:true,
     
    },
    formFile_2: {
      required: true,
     extension: "png|jpg|jpeg"
    },
    fname:{
      required:true,
      minlength:5
    },
    lname:{
      required:true,
      
    },
    fn:{
      required:true,
      minlength:5
    },
    mn:{
      required:true,
      minlength:5
    },
    phone:{
      required:true,
      minlength:11,
      pattern: (/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/)
    },
    addr:{
    required:true,
    minlength:10
  },
  inst1:{
    required:true,
    minlength:7
  },
  inst2:{
    required:true,
    minlength:7
  },
  email:{
    required:true,
    email:true
  },
  det:{
    required:true
    // date:true
  },
  gpa1: {
    required: true,
    range: [1, 5]
  },
  year1:{
    required:true,
    range: [1980, 2023]
  },
  gpa2: {
    required: true,
    range: [1, 5]
  },
  year2:{
    required:true,
    range: [1980, 2023]
  }

  },messages:{
    email:{
    required:"Please enter your email",
    email:"Please enter valid email"
  },
  det:{
    required:"Please enter current date",
    date:"Please enter valid date"

  },
  gpa1: {
    required:"Please enter GPA",
    range: "Please enter valid GPA"
  },
  year1:{
    required:"Please enter passing year",
    range: "Please enter valid passing year"
  },
  
  gpa2: {
    required:"Please enter GPA",
    range: "Please enter valid GPA"
  },
  year2:{
    required:"Please enter passing year",
    range: "Please enter valid passing year"
  },}
});


// --------------------------------phone-------------------------------

  function validcon(phone){
    if(phone == '' || !phone.match(/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/))
    { $("#inputContact").css({'color': '#ff0000'});
      return false;
    }
    else{
      $("#inputContact").css({'color': 'green'});
      return true;
    }
  }
// ---------------------------------------phone--------------------------------
    // function preview() {
    //   frame.src = URL.createObjectURL(event.target.files[0]);
    // }
    function clearImage() {
      document.getElementById("formFile_1").value = null;
      //frame.src = "";
      document.getElementById("formFile_2").value = null;
      //frame.src = "";
    }

    // ------------------------------------validate code end----------------------------------------
    // -------------------date picker--------------------
    $(document).ready(function(){

      $.fn.datepicker.defaults.format = "mm/dd/yyyy";
      $('#datepicker').datepicker({
          startDate: '-3d',
          endDate: '+2Y'
      });
        
    });

    // -------------------date picker end--------------------
  







































// ---------------------------------------step start-------------------------------------------

var form = $("#myform").show();
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        
    }
});

form.steps({
    headerTag: "h2",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        form.submit();
    }
});


// ---------------------------------------step start-------------------------------------------

// $("#myform").steps({
//   headerTag: "h2",
//   bodyTag: "section",
//   transitionEffect: "slideLeft",
//   autoFocus: true,
//   onFinished: function (event, currentIndex)
//    {
//        form.submit();
//    }
//   });





















  // $( "#myform" ).validate({
  //   rules: {
      
  //     formFile_1: {
  //       required: true,
  //       extension: "png|jpg|jpeg"
  //     },
  //     zilla:{
  //       required:true
  //     },
  //     thana:{
  //       required:true
  //     },
  //     gen:{
  //       required:true
  //     },
  //     board1:{
  //       required:true
  //     },
  //     board2:{
  //       required:true
  //     },
  //     formFile_2: {
  //       required: true,
  //       extension: "png|jpg|jpeg"
  //     },
  //     fname:{
  //       required:true,
  //       minlength:5
  //     },
  //     addr:{
  //     required:true,
  //     minlength:10
  //   },
  //   email:{
  //     required:true,
  //     email:true
  //   },
  //   det:{
  //     required:true
  //     // date:true
  //   },
  //   gpa1: {
  //     required: true,
  //     range: [1, 5]
  //   },
  //   year1:{
  //     required:true,
  //     range: [1980, 2023]
  //   },
  //   gpa2: {
  //     required: true,
  //     range: [1, 5]
  //   },
  //   year2:{
  //     required:true,
  //     range: [1980, 2023]
  //   }
  
  //   },messages:{
  //     email:{
  //     required:"Please enter your email",
  //     email:"Please enter valid email"
  //   },
  //   det:{
  //     required:"Please enter current date",
  //     date:"Please enter valid date"

  //   },
  //   gpa1: {
  //     required:"Please enter GPA",
  //     range: "Please enter valid GPA"
  //   },
  //   year1:{
  //     required:"Please enter passing year",
  //     range: "Please enter valid passing year"
  //   },
  //   gpa2: {
  //     required:"Please enter GPA",
  //     range: "Please enter valid GPA"
  //   },
  //   year2:{
  //     required:"Please enter passing year",
  //     range: "Please enter valid passing year"
  //   },
   

  

  //   }
  // });
  
  //   function validcon(phone){
  //     if(phone == '' || !phone.match(/(^(\+8801|8801|01|008801))[1|3-9]{1}(\d){8}$/))
  //     { $("#inputContact").css({'color': '#ff0000'});
  //       return false;
  //     }
  //     else{
  //       $("#inputContact").css({'color': 'green'});
  //       return true;
  //     }
  //   }

   
  //   $(document).ready(function(){
  //     $('#datepicker').datepicker({
  //       dateFormat: "dd-mm-yy",
  //     maxDate: new Date('11-10-2022'),
  //     minDate: new Date('11-09-2022')
  //     });
  // });
  


  // $("#myform").steps({
  //   headerTag: "h2",
  //   bodyTag: "section",
  //   transitionEffect: "slideLeft",
  //   autoFocus: true,
  //   // onFinished: function (event, currentIndex)
  //   //  {
  //   //      form.submit();
  //   //  }
  //   });



