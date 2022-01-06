<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>

<?php
    $orange = new Fruit();
    $banana = new Fruit();

    $orange->set_name('Pomarańcza');
    $banana->set_name('Banan');

    echo $orange->get_name();
    echo " ";
    echo $banana->get_name();


?>

<br>


<?php
class Car {
  public $color;
  public $model;
 
  public function __construct($color, $model, $type, $fuel) {
    $this->color = $color;
    $this->model = $model;
    $this->type = $type;
    $this->fuel = $fuel;

  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }

  public function work_purpose() {
    return "My car is a " . $this->type . " " . $this->fuel . "!";
}


}

$myCar = new Car("black", "Volvo", "van", "disel");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota", "hatchback", "lpg");
echo $myCar -> message();

$good_car = new Car("black", "Volvo", "van", "disel");
echo $myCar -> work_purpose();


?>