<?php
class Person {
  protected static function getName() {
    return "Mita";
  }
}

class Za extends Person {
  public $name;
  public function __construct() {
    $this->name = parent::getName();
  }
}

$test = new Za;
echo $test->getName;
?>