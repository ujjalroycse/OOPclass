<?php 

class Students{

    public $name;
    public $roll;
    public $department;

    function data($name,$roll,$dep){
      $this->name = $name;
      $this->roll = $roll;
      $this->department = $dep;
    return "Student name is : ".$this->name. ", Roll : " .$this->roll. ", Department : " .$this->department;
    }
}

$ujjal = new Students(); 
echo $ujjal->data('Ujjal Roy ',' 101367 ',' CMT');
echo "<br>";

$akash = new Students();
echo $akash->data('Akash Roy','101354','CMT');



?>