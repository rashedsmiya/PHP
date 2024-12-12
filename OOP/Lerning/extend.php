<?php

// Class and Object

class man{
    public $name = "Saud"; 
    public $age =  "30";
    public $address = "Dhaka";

    function info(){
        return 'Technology Village';
    }
}    

$saud = new man();
echo $saud->name; 
echo $saud->age; 
echo $saud->address; 
echo $saud->info();

// 2nd edison

class man{
    public $name; 
    public $age;
    public $address;

    function info(){
        return 'Technology Village';
    }
}    

$saud = new man();
$saud->name = "Saud";
echo $saud->name;

$saud = new man();
$saud->name = "Saki";
echo $saud->name; 

// 3rd Edison

class man{
    public $name; 
    public $age;
    public $address;

    function info($name, $age, $address){
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        return "Name : " . $this->name . " , Age : " . $this->age . " & Address : " . $this->address;
    }
}    

$saud = new man();
echo $saud->info('Saud', '30', 'Dhaka');

// Construct function
 
class man{
    public $name; 
    public $age; 
    public $address;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function info(){
        return "Name : ".$this->name." is ".$this->age;
    }
    
}  

$saud = new man("Saud", "30");

echo $saud->info(); 

// Destruct function

class man{
    public $name; 
    public $age; 
    public $address;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct(){
       echo $this->name.'<br>'.$this->age;
    }
}  

$saud = new man("Saud", "30"); 