<?php 
//Constructor
class students{
    public $name;
    public $roll;
    public $registration;

    function __construct($name,$roll,$reg)
    {
        $this->name = $name;
        $this->roll = $roll;
        $this->registration = $reg;

    }
    function data(){
        return "Student Name : ".$this->name." , Roll : ".$this->roll." , Registration : ".$this->registration;
    }
}
$ujjal = new students('Ujjal Roy','101367','100001540');
echo $ujjal->data();

echo "<br>";
echo "<br>";

//Destructor

class teachers{

    public $t_name;
    public $t_number;

    function __construct($name,$num)
    {
        $this->t_name = $name;
        $this->t_number = $num;
    }
    function __destruct()
    {
        echo "Teacher name is {$this->t_name}. Mobile Number {$this->t_number}.";
        echo "<br>";
    }
}
$Nirob = new teachers('Nirob Islam','01745856254');
$Alok = new teachers('Alok Roy','01745845654');


?>