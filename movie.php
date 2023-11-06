<?php 

    class Movie {
        public $name;
        public $original_name;
        public $gen;
        public $duration;
        public $image;

        public function __construct( string $_name, string $_original_name, array $_gen, int $_duration, Media $_image = null){
            $this->name = $_name;
            $this->original_name = $_original_name;
            $this->gen = $_gen;
            $this->duration = $_duration;
            $this->image = $_image;
        }
    }

?>