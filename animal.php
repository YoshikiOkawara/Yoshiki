<?php

class Animal {
    public $cry = "bowbow!";
    
    function bow() {
        echo $this->cry . PHP_EOL;
    }
}

class Dog extends Animal {
    public $cry = "わんわん";
 }


$animal_1 = new Dog();
$animal_1->bow();
?><?php

class Animal {
    public $cry = "bowbow!";
    
    function bow() {
        echo $this->cry . PHP_EOL;
    }
}

class Dog {
    public $cry = "わんわん";
    function bow(){
        echo $this->cry . PHP_EOL;
    }
}

$animal_1 = new Dog();

$animal_1->bow();
?><?php

class Animal {
    public $cry = "bowbow!";
    
    function bow() {
        echo "bowbow!" . PHP_EOL;
    }
}

$animal_1 = new Animal();

$animal_1->bow();
?>
