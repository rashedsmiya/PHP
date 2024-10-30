<?php 

   $conn = mysqli_connect("localhost", "root", "", "cmbd245");

   $users = $conn->query("SELECT * FROM users");

   $usersArr = $users->fetch_all(MYSQLI_ASSOC);   

   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
   }

?>

<form action="post">
   <input type="text" name="name" placeholder="Name" require> <br>
   <input type="email" name="email" placeholder="Email" require> <br> <br>
   <input type="radio" name="gender" value="Male" require> Male
   <input type="radio" name="gender" value="Female" require> Femeal
   <input type="radio" name="gender" value="Others" require> Others
   <br><br>
   <input type="password" name="password">
   <input type="submit" name="submit" value="Submit">
</form>

<table border="1"> 

   <tr>
       <th>SN</th>
       <th>Name</th>
       <th>Email</th>
       <th>Gender</th>
       <th>Actions</th>
   </tr>

   <?php foreach ($usersArr as $key => $user) : ?>

      <tr> 
         <td><?php echo $key + 1 ?></td>
         <td><?php echo $user['name'] ?></td>
         <td><?php echo $user['email'] ?></td>
         <td><?php echo $user['gender'] ?></td>
         <td>
            <a href="edit.php?id=<?php echo $user[`id`] ?>">Edit</a>
            <a href="delete.php?id=<?php echo $user[`id`] ?>">Delete</a>
         </td>
      </tr>
      <?php endforeach; ?>

</table>