<?php 

   require("./header.php");
   if(isset($_POST['ast'])){
      $name = $_POST['name']; 
      $city = $_POST['city'];


      $sql = "INSERT INTO `students` (`name`, `city`) VALUES (`$name`, `$city`)";
      $restult = $conn->query($sql);
      if($restult){ 
         echo "Student Added Successfully";
         echo "<script>setTimeout(()=> location.href='./', 2000)</script>";
      }else{
         echo "Student Not Added";
      }
   }
 
?>

<form action="" method="post">
   <input type="text" placeholder="Student Name" name = "name" required minlength="3">
   <br><br>
   <input type="text" placecholder="Student City" name ="city" required minlength="3">
   <br><br>
   <input type="submit" value="Add Student" name="ast">

</form>

<?php 

require_once("./footer.php");

?>

