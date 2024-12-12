<!-- Insert Data in Php  -->

<?php 

    $host     = 'localhost';
    $user     = 'root';
    $password = '';
    $dbname   = 'phpdatabase';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    $user = $_GET['user'];
    $pass = $_GET['pass'];


    $sql = "INSERT INTO register (username, password) VALUES('$user', '$pass')";
    $check =   mysqli_query($conn, $sql);

            if($check == true){
                echo "Data inserted Successfully";
                header('location:index.php');
            }else{
                echo "Data insertion Failed";
            }
 
    



