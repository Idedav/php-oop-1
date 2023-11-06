<?php 

    class Media{
        public $file_name;
        public $name;
        public $type = "image";

        public function __construct($_file_name, $_name){
            $this->file_name = $_file_name;
            $this->name = $_name;
        }
    }

    class Movie {
        public $name;
        public $original_name;
        public $gen;
        public $duration;
        public $image;

        public function setImage(Media $_image){
            $this->image = $_image;
        }

        public function __construct( string $_name, string $_original_name, array $_gen, int $_duration, Media $_image = null){
            $this->name = $_name;
            $this->original_name = $_original_name;
            $this->gen = $_gen;
            $this->duration = $_duration;
            $this->image = $_image;
        }
    }

    $movies = [
        new Movie('Il Labirinto', 'Maze Runner', ['Azione'], 120, new Media('maze_runner.jpg', 'Maze Runner')),
        new Movie('Barbie', 'Barbie', ['Commedia'], 90, new Media('barbie.jpg', 'Barbie'))
    ];

    var_dump($movies);
?>