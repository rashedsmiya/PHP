<table border="1px solid black">
      <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Password</th>
          <th>Update</th>
      </tr>
<?php 

    $host     = 'localhost';
    $user     = 'root';
    $password = '';
    $dbname   = 'phpdatabase';
  
    $conn = mysqli_connect($host, $user, $password, $dbname);
 
    $sql = "SELECT * FROM register";
    $check =  mysqli_query($conn, $sql);
    $rowscount = mysqli_num_rows($check);
    if($rowscount > 0){
            while($data = mysqli_fetch_array($check)){
                ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><a href="updateprocess.php?id=<?php echo $data['id']; ?>">Update</a></td>
                </tr>
              <?php  } 
    }else{
        echo "No date found";
    } 
?>
</table> 