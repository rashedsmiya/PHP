<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Makes details required only if #other is checked.</title>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>
   
      <form id="myform">
      <label for="field">UserName</label>
      <input type="text" id="username" name="username">

      <label for="field">Email</label>
      <input type="email" id="email" name="email">
      <br>

      <label for="field">Course_free</label>
      <input type="email" id="email" name="email">
      <br>
      <input type="submit" value="Registration!">
      </form>


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});

$( "#myform" ).validate({ 
  rules: {
    username: {
      required: true,
      rangelength:[8, 10]
    },

    email: {
      required: true,
      email: true
    },

    count_free:{
      require: 
    },

    password: "required",
    password_again:{
         equalTo:"#password"
    }
  },

  message:{
   email: "ami moto messsage"
  }

});
</script>
</body>
</html>