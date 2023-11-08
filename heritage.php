<?php
class Fruit {
  public $nom;
  public $couleur;
  public function __construct($name, $color) {
    $this->name = $nom;
    $this->color = $couleur;
  }
  public function intro() {
    echo "{$this->nom} manana loko {$this->couleur}.";
  }
}

// Strawberry is inherited from Fruit
class Test extends Fruit {
  public function message() {
    echo "ceci est un message ";
  }
}

$test = new Test('Kitoza','mena');
$test->message();