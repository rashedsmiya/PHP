<?php  

   // Here Document 

   $line = <<<MYDATA
   This is first line
   This is "second"
   This is third line.
MYDATA;
   echo $line;


   // String Interpolation

    echo "Apple Price $ten";  // error
    echo 'Apple Price $ten';  // true
   
   $num1 = 10;
   echo "$num1 Apple Price is \$ten";



   // case-sensitive constant name
   define("GREETING", "Welcome to W3Schools.com!");
   echo GREETING;
   
   define("pi", 3.1415);
   echo pi; // true

   // PHP Arithmetic Operators

   echo 4+3;
   echo 1-2;
   echo 3*2;
   echo 4/2;
   echo 48%2;
   echo 48**2;

   //  Assignment Operators 
      
   $ram = $shyam = $rohan = 10;
   echo $ram;
   echo $shyam;
   echo $rohan;

   $m = 15;
   $m += 10;
   echo $m;

   $x = 10;
   $x *= 33;
   echo $x;

   // If else statement

   if(10>2):
      echo "Yes";
      
   endif;
   echo " Rest of the code";

   if(10>2) 
   {
      echo "Main 1";
      if(10>5){
         echo "Nested Code Excuted 1<br>";
      }
      if(20>5){
         echo "Nested Code excuted 2";
      }
   }

   if(10>5){
      echo "Main 2";
   }

   if(10>2):
      echo "Condition is true <br>";
    else :
      echo "Condition is False <br>";
    endif;
    echo "Rest of the code"; 

    if (10>2):
      echo "Main Condition is True ";
      if(10>5):
         echo "Nested Condition true";
      else:
         echo "Nested Condition False ";
      endif;
   else:
      echo "Main Condition is False";
   endif;
   echo "Rest of the code";

   // Ternary or Condition Operators

   $result = (1 > 2) ? "Greater" : "Less";
   echo $result;

   // While Loop
   $num = 1;
   while($num <= 5)
   {
      echo "Geekyshows Count: $num<br>";
      $num++;
   }
   echo "Rest of the code";

   $num = 1;
      
   while($num <= 5):      
      echo "Geekyshows Count: $num<br>";
      $num++;
   endwhile;
   echo "Rest of the code";

   
   

?>