<?php
/*

// Defining Class
class Fruit{
  // Properties/DataMem
  private $color;
  private $name;
  public  $weight;

  function __construct(){
    echo "Construcor <br>";
  }
  //Mem Function/ Methods
  function set_color($c){
    $this->color= $c;
    echo "Color Set <br>";
  }
  function show_color(){
    echo "Fruit Color: " .$this->color ."<br>";
  }

  function __destruct(){
    echo "Destructor <br>";
  }
}

echo "--------<br>";
/// Creating object
$obj =new Fruit();
echo "--------<br>";

// Accessing Objects (properties/methods)
$obj->set_color("Red");
$obj->show_color();


*/

/*
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();


*/




class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();



abstract class ParentClass {
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3() : string;
}



//// Example

// Parent class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car {
  public function intro() : string {
    return "French extravagance! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();