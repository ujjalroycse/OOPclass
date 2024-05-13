<?php 

trait Message{
    public function msg(){
        echo "Hello Message 01 \n";
    }
}

trait Message2{
    public function msg2(){
        echo "Hello msg 02 \n";
    }
}

trait Message3{
    public function msg3(){
        echo "Hello msg 02 \n";
    }
}

class Message1{
    use Message,Message2,Message3;
}

class other{
    use Message2,Message;
}

$msg1 = new Message1();
$msg1->msg();
$msg1->msg2();
$msg1->msg3();

echo "<br>";
echo "<br>";
$msg3 = new other();
$msg3->msg2();
$msg3->msg();





?>