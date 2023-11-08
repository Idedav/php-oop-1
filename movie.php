<?php 

    class Movie extends Production {
        public $duration;

        use PublishedYear;

        public function __construct(string $_name, string $_original_name, array $_gen, Media $_image = null, int $_published_year, int $_duration){
            
            parent::__construct($_name, $_original_name, $_gen, $_image);

            $this->published_year = $_published_year;
            $this->duration = $_duration;

        }

    }

?>