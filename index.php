<?php 

    class Movie {
        public $name;
        public $original_name;
        public $gen;
        public $duration;
        public function __construct( string $_name, string $_original_name, array $_gen, int $_duration){
            $this->name = $_name;
            $this->original_name = $_original_name;
            $this->gen = $_gen;
            $this->duration = $_duration;
        }
    }

    $maze_runner = new Movie('Il Labirinto', 'Maze Runner', ['Azione'], 120 );

    $barbie = new Movie('Barbie', 'Barbie', ['Commedia'], 90);

    var_dump($maze_runner);
    var_dump($barbie);
?>