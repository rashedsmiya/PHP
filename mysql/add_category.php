<?php 

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "store_db"; 

    $conn = new mysqli($servername, $username, $password, $dbname); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
     
?>   

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Categorys</title>
    </head>
    <body> 
 
        <?php 
 
            if(isset($_GET['category_name'])){
                $category_name      = $_GET['category_name'];
                $category_entrydate = $_GET['category_entrydate'];  

                $sql = "INSERT INTO category (category_name, category_entrydate) 
                        VALUES('$category_name', '$category_entrydate')";

                       if($conn->query($sql) == TRUE){
                         echo "Data Inserted!";
                       } else{
                         echo "Date not Inserted"; 
                       }
               }; 
        ?>
        
        <form action="add_category.php" method="GET">
            Category : <br>
            <input type="text" name="category_name"> <br> <br>
            Category Entry Date : <br>
            <input type="date" name="category_entrydate"> <br> <br>
            <input type="submit" value="submit">
        </form>

    </body>
    </html>