<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 4</title>
</head>
<body>

<?php 

$x = 50;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest(); // run function
echo $y; // output the new value for variable $y

?>




<?php 
$txt = "Hello World!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;



?>






     <?php 
         
         $name = "Yahoo Baba<br>";
          
         echo "Hello how are you : " . $name;
     
     ?>
          
  <?php 
    $first_name = "Raj";
    $amount = 10;

    ?>

    <h1>Hello <?php echo $first_name ?>, You amount is <?php echo $amount ?> </h1>

    <h2>Total amount is: <?php echo $amount ?></h2>

    <h2>Your name is: <?php echo $first_name ?></h2> 
    
    <?php    
      $name = "Raj";

      $price = 100;

      $isAdmin = true;

      $address = 'Test area, Test District, 758478';

      $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perferendis necessitatibus voluptate iste, facilis aut quam voluptates, tempora nisi ipsum ad mollitia, ullam possimus qui repellat enim similique nam voluptas!";

      echo "$isAdmin";

    $name = "Raj";

    $my_School = "";

    $mySchool = "";

    $mySchoolName = "";

    $MySchoolName = "";


    $first_name = "Rajdwip";

    $name = "first_name";

    echo $name;      
    
    ?>


</body>
</html>