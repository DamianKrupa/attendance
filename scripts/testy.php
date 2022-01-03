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