<?php 

  require_once("header.php");

?>

<form action="" method="post">
   <input type="text" placeholder="Student Name" name="name" required minlength="3">
   <br><br>
   <input type="text" placeholder="Student City" name="city" require>
   <br><br>
   <input type="submit" value="Add Student" name="Student">
</form>

<?php 
require_once("./footer.php");
?>