<?php
class Saluer {
  const MESSAGE = "Bonjour de la part de Mitantsoa";
  public function salut() {
    echo self::MESSAGE;
  }
}

$bonjour = new Saluer();
$bonjour->salut();
?>