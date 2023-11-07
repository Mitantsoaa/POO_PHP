<?php
    class Fruits
    {
        public $name;
        public $color;

        // setters
        function setName($name){
            $this->name = $name;
        }

        function setColor($color){
            $this->color = $color;
        }

        // getters
        function getName(){
            return $this->name;
        }

        function getColor(){
            return $this->color;
        }
    }

    $akondro = new Fruits();
    $paiso = new Fruits();

    $akondro->setName('Akondro');
    $paiso->setName('Paiso');

    echo "This name is ".$akondro->getName();