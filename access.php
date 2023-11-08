<?php
    class Fruit {
        public $name;
        public $color;

        public function setName($name)
        {
            $this->name = $name;
        }

        protected function setColor($col)
        {
            $this->color = $col;
        }

        private function getColor()
        {
            return $this->color;
        }
    }

    $paiso = new Fruit();
    $paiso->setName('Paiso');
    $paiso->setColor('Mena');
    echo $paiso->getColor();