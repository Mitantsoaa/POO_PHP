<?php
    class Fruits
    {
        public $name;
        public $color;

        function __construct($name,$color) {
            $this->name = $name;
            $this->color = $color;
        }
        // setters
        // function setName($name){
        //     $this->name = $name;
        // }

        // function setColor($color){
        //     $this->color = $color;
        // }

        // getters
        function getName(){
            return $this->name;
        }

        function getColor(){
            return $this->color;
        }
    }

    $akondro = new Fruits('Akondro');
    $paiso = new Fruits('Paiso');

    // $akondro->setName('Akondro');
    // $paiso->setName('Paiso');

    echo "This name is ".$akondro->getName();