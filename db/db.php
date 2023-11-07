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
        ),
        new TvSerie(
            "L'attacco dei giganti",
            '進撃の巨人', 
            ['Anime','Azione'],
            new Media(
                'aot.jpg',
                'Attacco dei giganti'
            ),
            2013,
            2023,
            87,
            4            
        ),
        new TvSerie(
            'You',
            'You', 
            ['Thriller'],
            new Media(
                'you.jpg',
                'You'
            ),
            2018,
            2023,
            40,
            4            
        ),
        new TvSerie(
            'Lupin',
            'Lupin', 
            ['Mistero'],
            new Media(
                'lupin.jpg',
                'Lupin'
            ),
            2021,
            2023,
            17,
            3            
        ),
        new TvSerie(
            'Death Note',
            'デスノート', 
            ['Anime', 'Psicologico'],
            new Media(
                'deathnote.webp',
                'Death Note'
            ),
            2006,
            2007,
            36,
            1            
        ),
        new TvSerie(
            'Orange Is the New Black',
            'Orange Is the New Black', 
            ['Drammatico'],
            new Media(
                'onb.jpg',
                'Orange Is the New Black'
            ),
            2013,
            2019,
            91,
            7            
        )
    ];

?>