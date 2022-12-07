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
      minlength:11
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
  







































