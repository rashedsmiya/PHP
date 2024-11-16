<?php 

      $conn = mysqli_connect('localhost', 'root', '', 'sms');

      if($conn){         
         $sql = "SELECT * FROM students";
          $result = mysqli_query($conn, $sql);
   ?>

         <table border="1">
            <tr>
               <th>ID</th>

               <th>Class ID</th>

               <th>Name</th>

               <th>Age</th>
               
               <th>Roll</th>
            </tr>
          

 <?php 

          while($row = mysqli_fetch_assoc($result)) {
?>
          <tr>
             <td> <?php echo $row['id']; ?></td>
             <td> <?php echo $row['class_id']; ?></td>
             <td> <?php echo $row['name']; ?></td>
             <td> <?php echo $row['age']; ?></td>
             <td> <?php echo $row['roll']; ?></td>
          </tr>

<?php 

    }

 ?>

</table>

<?php 

} else{

}