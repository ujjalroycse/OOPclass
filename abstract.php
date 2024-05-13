<?php 

abstract class car{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract protected function intro();
}

class bmw extends car{
    public function intro(){
        echo "Choose German quality! I'm an {$this->name}";
    }
}

$bmw = new bmw('BMW');
$bmw->intro();


echo "<br>";
echo "<br>";


abstract class ujjal{
    public $name;

    abstract protected function info($name);
}

class myname extends ujjal{
    public function info($u){
        echo "Hello, I am Ujjal Roy";
    }
}

$me = new myname();
$me->info("ujjal");





?>