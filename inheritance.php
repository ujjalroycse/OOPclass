<?php 

class people{

    public $name;
    public $age;
    public $gender;

    public function __construct($name,$age,$gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function info(){
        return "Name : {$this->name} , Age : {$this->age} , Gender : {$this->gender}. <br>" ;
    }
}

class man extends people{
    public function data(){
        echo "Bangladeshi people.";
    }
}

$man = new people('Bikash Roy','18','Male');
$women = new people('Rakhi Roy','16','Female');

echo $man->info() ;
echo $women->info();




class main{
    public $name;
    public $roll;
    public $group;

    public function __construct($name,$roll,$group)
    {
        $this->name = $name;
        $this->roll = $roll;
        $this->group = $group;
    }

    protected function info(){
        echo "Student name is : {$this->name} , Roll : {$this->roll}, Group : {$this->group}";
    }
}

class student extends main{
    public function message(){
        $this->info();
    }
}

$ujjal = new student('Ujjal Roy','1112','A');
 echo $ujjal->message();





class employe{

    public $name;
    public $age;
    public $salary;

    function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    function info(){
        echo "<h3>Employe Details</h3>";
        echo "Employe name : " . $this->name. "<br>";
        echo "Employe age : " . $this->age. "<br>";
        echo "Employe salary : " . $this->salary. "<br>";
    }

}
class manager extends employe{
    public $overtime = 1000;
    public $totalsalary;

    function data(){
        $this->totalsalary = $this->salary + $this->overtime;
        echo "<h3>Manager Details</h3>";
        echo "Manager name : " . $this->name. "<br>";
        echo "Manager age : " . $this->age. "<br>";
        echo "Manager salary : " . $this->totalsalary. "<br>";
    }
}



$e1 = new employe('Ujjal Roy',24,2400);
$m1 = new manager('Akash Roy',30,20000);

$e1->info();
$m1->data();










?>