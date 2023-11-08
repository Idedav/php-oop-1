<?php 

    class TvSerie extends Production {
        public $aired_to_year;
        public $number_of_episodes;
        public $number_of_seasons;

        use PublishedYear;

        public function __construct(string $_name, string $_original_name, array $_gen, Media $_image = null, int $_published_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons){

            parent::__construct($_name, $_original_name, $_gen, $_image);

            $this->published_year = $_published_year;
            $this->aired_to_year = $_aired_to_year;
            $this->number_of_episodes = $_number_of_episodes;
            $this->number_of_seasons = $_number_of_seasons;

        }
    }

?>