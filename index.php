<?php 
    require_once __DIR__ . '/production.php';
    require_once __DIR__ . '/tvserie.php';
    require_once __DIR__ . '/movie.php';
    require_once __DIR__ . '/media.php';
    require_once __DIR__ . '/db/db.php';

    var_dump($productions);

    die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Films oop</title>
</head>
<body>
    
    <div class="container my-5">
        <h1 class="text-center">Movies oop</h1>

        <div class="container d-flex flex-wrap justify-content-center my-5">

        <?php foreach($movies as $movie): ?>

        <div class="card m-3 dc-card" style="width: 18rem;">
            <img src="img/<?php echo $movie->image?->file_name ?? 'nondisponibile.png' ?>" class="card-img-top" alt="<?php echo $movie->image?->name ?? '' ?>">
            <div class="card-body">
                <h4 class="card-title"><?php  echo $movie->name === $movie->original_name ? $movie->name :  $movie->name . ' - ' . $movie->original_name?></h4>
                <p class="card-text">Categorie: <?php echo implode(' - ', $movie->gen) ?></p>
                <p class="card-text">Durata: <?php echo $movie->duration ?> min</p>
            </div>
        </div>

        <?php endforeach; ?>

        </div>
    </div>

</body>
</html>