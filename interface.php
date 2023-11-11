<?php
interface Transport {
  public function marcher();
}

class Voiture implements Transport {
  public function marcher() {
    echo " Roule ";
  }
}

class Train implements Transport {
  public function marcher() {
    echo " Rail ";
  }
}

class Avion implements Transport {
  public function marcher() {
    echo " Vole ";
  }
}

$voiture = new Voiture();
$train = new Train();
$avion = new Avion();
$transport = array($voiture, $train, $avion);

foreach($transport as $trans) {
  $trans->marcher();
}
?>
