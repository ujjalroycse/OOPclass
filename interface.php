<?php 


interface Company{
    public function info($a,$b);
}
class Manager implements Company{
    
    public $name;
    public $age;
    public function info($c,$d){
        $this->name = $c;
        $this->age = $d;
        echo "Name : {$this->name} Age : {$this->age}";
    }
}

$ajoy = new Manager();
$ajoy->info("Ajoy Roy",22);


echo "<br>";


interface Animal {
    public function data();
}

class Dog implements Animal {
    public function data(){
        echo 'Dog is a Kutta.<br>';
    }
}
class Goat implements Animal{
    public function data(){
        echo "Goat is a Cagol.";
    }
}



$dog = new Dog();
$goat = new Goat();

$dog->data();
$goat->data();






?>