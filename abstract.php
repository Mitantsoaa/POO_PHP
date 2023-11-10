<?php
// Parent class
abstract class Personne {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function anarana() : string;
}

// Child classes
class Bandy extends Personne {
  public function anarana() : string {
    return "Je m' appele $this->name!";
  }
}

class Sipa extends Personne {
  public function anarana() : string {
    return "Je m' appele $this->name!";
  }
}



// Create objects from the child classes
$bandy = new Bandy("Jean");
echo $bandy->anarana();
echo "<br>";

$sipa = new Sipa("Belle");
echo $sipa->anarana();
echo "<br>";

?>
