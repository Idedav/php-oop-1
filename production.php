<?php 

class Production {
    public $name;
    public $original_name;
    public $gen;
    public $image;

    public function __construct( string $_name, string $_original_name, array $_gen, Media $_image = null){
        $this->name = $_name;
        $this->original_name = $_original_name;
        $this->gen = $_gen;
        $this->image = $_image;
    }
}


?>