<?php
trait presentation1 {
  public function nom($nom) {
    echo "Mon nom est $name";
  }
}

trait presentation2 {
  public function prenom($prenom) {
    echo "mon prenom est $prenom";
  }
}

class Represent {
  use presentation1;
}

class Represent2 {
  use presentation1, presentation2;
}

$obj = new Represent();
$obj->presentation1('Mita');
echo "<br>";

$obj2 = new Represent2();
$obj2->presentation1('Mita');
$obj2->presentation2('Bory');
?>