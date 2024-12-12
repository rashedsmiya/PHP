<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tiny.cloud/1/API_KEY/tinymce/6/tinymce.min.js"></script>
   <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

   <title>Document</title>
</head>
<body>

     <h1>Admission Form</h1>

     <form action="save.php" method="post" enctype="multipart/form-data">

     <!-- <select name="course_name[]" multiple>
        
        <option value="0">Select Your Course</option>

        <option value="wp" selected> Fullstack Wp Developement</option>

        <option value="laravel">Full Stackt Laravel Developement</option>
        <option value="laravel">Full Stackt Laravel Developement</option>
     </select> -->

     <textarea id="myTextarea"></textarea>

     <textarea name="shortdes" id="myTextarea" cols="30" rows="10">

     </textarea> <br> <br>

     <!-- <input type="search" name="search_data" id="">

     <input type="datetime-local" name="" id="">

     <input type="week" name="" id=""> -->
   <!--  
         <label for="username">User Name</label>
         <input type="text" name="username" id=""> </br><br>
         
         <label for="email">user email</label>
         <input type="email" name="email" id=""><br><br>

         <label for="password">password</label>
         <input type="password" name="password" id=""><br><br>

         <label for="shortdes">Short Description</label>

         <textarea name="shortdes" id="" cols="30" rows="10">

         </textarea><br><br>

         <label for="Gender">Gender</label>
         <input type="radio" name="gender" value="male" id=""> Male

         <input type="radio" name="gender" value="female" id=""> Female
         <input type="radio" name="gender" value="others" id=""> Others
         <label for="bestteacher">Best Teacher</label>

         <input type="checkbox" name="bestteacher[]" value="hadi" id=""> Hadi
         <input type="checkbox" name="bestteacher[]" value="jaman" id=""> Jaman
         <input type="checkbox" name="bestteacher[]" value="hadijaman" id=""> Hadi Jaman <br>

         <label for="coursefee">Course Fee</label>

         <input type="number" name="course_fee" id=""> <br> <br>
         <label for="cell">Write Your Cell Number</label>

         <input for="tel" name="cell" id=""> <br> <br>

         <label for="birthDate">Birht Date</label>
         <input type="date" name="birthDate" id=""> <br> <br>

         <label for="color">Write Your Color</label>

         <input type="color" name="color" id=""> <br> <br>

         <label for="classtime">Class Time</label>
         <input type="time" name="classtime" id=""> <br> <br>

         <label for="websiteurl">Web Site URL</label>

         <input type="url" name="websiteurl" id="">

         <label for="image">Upload Your Photo</label>
         <input type="file" name="image" id=""> <br> <br>

         <label for="month">Month</label>

         <input type="month" name="course_star_month" id="">

         <input type="hidden" name="ip" value="">  -->

         <!-- <input type="range" name="price_range" min="1" max="100" id=""> -->



         <input type="submit" value="submit">

         <!-- <input type="reset" value="reset"> -->
     </form>

</body>
</html>