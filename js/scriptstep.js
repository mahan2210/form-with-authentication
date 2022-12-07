


//   $("#myform").steps({
//     headerTag: "h2",
//     bodyTag: "section",
//     transitionEffect: "slideLeft",
//     autoFocus: true,
//     onFinished: function (event, currentIndex)
//      {
//          form.submit();
//      }
// });




var form = $("#myform");

form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    
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
        formFile_2: {
          required: true,
          extension: "png|jpg|jpeg"
        },
        fname:{
          required:true,
          minlength:5
        },
        addr:{
        required:true,
        minlength:10
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

form.children("div").steps({
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
