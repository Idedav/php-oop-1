<?php 

    $productions = [
        new Movie(
            'Maze Runner',
            'Maze Runner',
            ['Azione'],
            new Media(
                'maze_runner.jpg',
                'Maze Runner'
            ),
            2023,
            120
        ),
        new Movie(
            'La città incantata',
            '千と千尋の神隠し',
            ['Animazione', 'Avventura', 'Fantastico'],
            new Media(
                'lacittaincantata.jpg',
                'La città incantata'
            ),
            2023,
            120),
        new Movie(
            'Barbie',
            'Barbie',
            ['Commedia'],
            new Media(
                'barbie.jpg',
                'Barbie'
            ),
            2023,
            120
        ),
        new Movie(
            'Shrek',
            'Shrek',
            ['Commedia', 'Famiglia'],
            new Media(
                'shrek.jpg',
                'Shrek'
            ),
            2023,
            120
        ),
        new Movie(
            'Il castello errante di Howl',
            'ハウルの動く城',
            ['Animazione', 'Avventura', 'Fantastico'],
            new Media(
                'casstello.jpg',
                'Il castello errante di Howl'
            ),
            2023,
            120
        ),
        new Movie(
            'Avengers: Endgame',
            'Avengers: Endgame',
            ['Azione', 'Supereroi'],
            new Media(
                'avengers.jpg',
                'Avengers'
            ),
            2023,
            120
        ),
        new TvSerie(
            'The Walking Dead',
            'The Walking Dead', 
            ['Horror'],
            new Media(
                'walkingdead.jpg',
                'The Walking Dead'
            ),
            2010,
            2022,
            177,
            11            
        )
    ];

?>