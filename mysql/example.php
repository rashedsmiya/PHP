<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // Create Connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Geeky Shows</title>
  </head>
  <body>
    
        <div class="container"> 
            <?php 
              $sql = "SELECT * FROM student";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                echo '<table class="table">';
                  echo "<thead>";
                    echo "<tr>";
                      echo "<th>ID</th>";
                      echo "<th>Name</th>";
                      echo "<th>Roll</th>";
                      echo "<th>Address</th>";
                      echo "</tr>";
                      echo "</thead>";
                      echo "</tbody>";
                         while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["roll"] . "</td>";
                                echo "<td>" . $row["address"] . "</td>";
                            echo "</tr>";
                         }
                      echo "</tbody>";
                      echo '</table>';
               } else{
                 echo "0 Results";
               }
            ?>
        </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 

$sql = "INSERT INTO student (name, roll, address) VALUES('Rani', '103', 'kolkata')";

    if(mysqli_query($conn, $sql)){
        echo "New Record Inserted Successfully";
    } else{
        echo "Unable to Insert Data";
    }


?>
    <?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // Create Connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if(!$conn){
        die("Connection Failed");
    }

    else "Connected Sucessfully <hr>";

    if(isset($_REQUEST['submit'])){
         // checking for empty fields
         if(($_REQUEST['name'] == "") || ($_REQUEST['roll'] == "") || ($_REQUEST['address'] == "")){
                echo "<small>Fill All Fields ....</small><hr>";
         } 

         else{
            $name    = $_REQUEST['name'];
            $roll    = $_REQUEST['roll'];
            $address = $_REQUEST['address'];
            $sql = "INSERT INTO student (name, roll, address) VALUE('$name', '$roll', '$address')";
            if(mysqli_query($conn, $sql)){
                echo "New Record Insterted Successfully";
            }
            else{
                echo "Unable to insert data";
            }
        }
     } 
?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Geeky Shows!</title>
  </head>
  <body>
 
     <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="#" method="POST">
                    <div class="form-group">
                        <lable for="name">Name</lable>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <lable for="roll">Roll</lable>
                        <input type="text" class="form-control" name="roll" id="roll">
                    </div>
                    <div class="form-group">
                        <lable for="address">Address</lable> 
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>    
            </div>
            <div class="col-sm-6 offset-sm-2">
                 <?php 
                  $sql = "SELECT * FROM student";
                  $result = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($result) > 0){
                    echo '<table class="table">';
                      echo "<thead>";
                        echo "<tr>";
                          echo "<th>ID</th>";
                          echo "<th>Name</th>";
                          echo "<th>Roll</th>";
                          echo "<th>Address</th>";
                          echo "</tr>";
                          echo "</thead>";
                          echo "</tbody>";
                             while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["name"] . "</td>";
                                    echo "<td>" . $row["roll"] . "</td>";
                                    echo "<td>" . $row["address"] . "</td>";
                                echo "</tr>";
                             }
                          echo "</tbody>";
                          echo '</table>';
                   } else{
                     echo "0 Results";
                   }
                ?>
            </div>
        </div>     
     </div>

   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>

<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // Create Connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if(!$conn){
        die("Connection Failed");
    }

    else "Connected Sucessfully <hr>"; 

    // sql to delete record
    if(isset($_REQUEST["submit"])){
    $sql = "DELETE FROM student  WHERE id = {$_REQUEST["id"]}";
    if(mysqli_query($conn, $sql)){
        echo "Record Deleted";
    }
   
   }
    
    
?>
 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Geeky Shows!</title>
  </head>
  <body>
            <div class="col-sm-6 offset-sm-2">
                 <?php 
                  $sql = "SELECT * FROM student";
                  $result = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($result) > 0){
                    echo '<table class="table">';
                      echo "<thead>";
                        echo "<tr>";
                          echo "<th>ID</th>";
                          echo "<th>Name</th>";
                          echo "<th>Roll</th>";
                          echo "<th>Address</th>";
                          echo "<th>Action</th>";
                          echo "</tr>";
                          echo "</thead>";
                          echo "</tbody>";
                             while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["name"] . "</td>";
                                    echo "<td>" . $row["roll"] . "</td>";
                                    echo "<td>" . $row["address"] . "</td>";
                                    echo '<td>
                                    <form action="" method="POST"><input type="hidden" name="id" value=' . $row["id"] . '>
                                    <input type="submit" class="btn btn-sm btn-danger" 
                                    name="submit" value="Delete"></form></td>';
                            }
                   } else{
                     echo "0 Results";
                   }
                ?>
            </div>
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>

<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db";

    // Create Connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if(!$conn){
        die("Connection Failed");
    }

    else "Connected Sucessfully <hr>"; 

    $sql = "UPDATE student SET  name = 'Rohit', roll = '110', address='kolkata' WHERE id=13";
    if(mysqli_query($conn, $sql)){
        echo "Record Update";
    } 
    
    
?>

<?php

if(isset($_REQUEST['submit'])){
        // checking for empty fields
        if(($_REQUEST['name'] == "") || ($_REQUEST['roll'] == "") || ($_REQUEST['address'] == "")){
               echo "<small>Fill All Fields ....</small><hr>";
        } 

        else{
           $name    = $_REQUEST['name'];
           $roll    = $_REQUEST['roll'];
           $address = $_REQUEST['address'];
           $sql = "UPDATE student SET name = '$name', roll = '$roll', address = '$address', WHERE id = {$_REQUEST['id']}";
           if(mysqli_query($conn, $sql)){
               echo "New Record Insterted Successfully";
           }
           else{
               echo "Unable to insert data";
           }
       }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Geeky Shows!</title>
  </head>
  <body>

        <div class="container">
            <div class="row">
                 <div class="col-sm-4">
                    <?php 
                        if(isset($_REQUEST['edit'])){
                            $sql = "SELECT * FROM student WHERE id = {$_REQUEST['id']}";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                        }
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($row["name"])){echo $row ["name"];}?>">
                        </div>
                        <div class="form-group">
                            <label for="roll">Roll</label>
                            <input type="text" class="form-control" name="roll" id="roll" value="<?php if(isset($row["roll"])){echo $row ["roll"];}?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?php if(isset($row["address"])){echo $row ["address"];}?>">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        <button type="submit" class="btn btn-success" name="update">Update</button>
                    </form>
                 </div>
                 <div class="col-sm-6 offset-sm-2">
                 <?php 
                  $sql = "SELECT * FROM student";
                  $result = mysqli_query($conn, $sql);
                  if(mysqli_num_rows($result) > 0){
                    echo '<table class="table">';
                      echo "<thead>";
                        echo "<tr>";
                          echo "<th>ID</th>";
                          echo "<th>Name</th>";
                          echo "<th>Roll</th>";
                          echo "<th>Address</th>";
                          echo "<th>Action</th>";
                          echo "</tr>";
                          echo "</thead>";
                          echo "</tbody>";
                             while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["name"] . "</td>";
                                    echo "<td>" . $row["roll"] . "</td>";
                                    echo "<td>" . $row["address"] . "</td>";
                                    echo '<td>
                                    <form action="" method="POST"><input type="hidden" name="id" value=' . $row["id"] . '>
                                    <input type="submit" class="btn btn-sm btn-warning" 
                                    name="edit" value="Edit"></form></td>';
                            }
                   } else{
                     echo "0 Results";
                   }
                ?>
            </div>
            </div>
        </div>
    
     
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>     
  </body>
</html>

<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "new_db"; 

    // Create Connection
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if(!$conn){
        die("Connection Failed");
    }

    else "Connected Sucessfully <hr>"; 

    $sql =  "CREATE TABLE new_tab(
            id INT AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(255),
            roll INT, 
            address TEXT
    )";  
 
    if(mysqli_query($conn, $sql)){
        echo "Table Created Successfully";
    } else{
        echo "Unable to Create Database";
    }

?>

    <?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "new_db"; 

    // Create Connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if($conn->connect_error){
        die("Connection Failed");
    }
    else "Connected Sucessfully <hr>"; 

    $sql = "SELECT * FROM new_tab";

    $result = $conn->query($sql); 
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo " ID: " . $row['id'] . " Name: " . $row['name'] . " Roll: " . $row['roll'] . " Address: " . $row['address'] . "<br>";
        }
    } else {
        echo "0 Records";
    }
    
?>


<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db"; 

    // Create Connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if($conn->connect_error){
        die("Connection Failed");
    }
    else "Connected Sucessfully <hr>"; 

    $sql = "INSERT INTO student (name, roll, address) VALUES('komal', '120', 'Mumbai')";

    if($conn->query($sql) === TRUE){
        echo "Record Inserted Succefully";
    } else{
        echo "Unable to Insert Data";
    }

    
?>

<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db"; 

    // Create Connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if($conn->connect_error){
        die("Connection Failed");
    }

    echo "Connected Sucessfully <hr>"; 

    $sql = "DELETE  FROM student WHERE id = 13";
    if($conn->query($sql) == TRUE){
        echo "Record Deleted Successfully";
    } else {
        echo "Unable to Delete Date";
    } 
    $conn->close();

?>

<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "test_db"; 

    // Create Connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check Connection
    if($conn->connect_error){
        die("Connection Failed");
    }

    echo "Connected Sucessfully <hr>"; 

    $sql = "UPDATE student SET name = 'Sameer', roll = '1001', address = 'Chennai' WHERE id = 16";
    if($conn->query($sql) == TRUE){
        echo "Record Deleted Successfully";
    } else {
        echo "Unable to Delete Date";
    } 
    $conn->close();

?>