<?php 
    try{
        require_once __DIR__ . '/trait/publishedYear.php';
        require_once __DIR__ . '/production.php';
        require_once __DIR__ . '/tvserie.php';
        require_once __DIR__ . '/movie.php';
        require_once __DIR__ . '/media.php';
        require_once __DIR__ . '/db/db.php';
    }catch(Exception $e) {
        $e;
    }

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
        <h1 class="text-center">Productions oop</h1>

        <div class="container d-flex flex-wrap justify-content-center my-5">

        <?php if(isset($e)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $e->getMessage(); ?>
            </div>
        <?php else: ?>

        <?php foreach($productions as $production): ?>

        <div class="card m-3 dc-card" style="width: 18rem;">
            <!-- IMMAGINE -->
            <img src="img/<?php echo $production->image?->file_name ?? 'nondisponibile.png' ?>" class="card-img-top" alt="<?php echo $production->image?->name ?? '' ?>">
            <!-- TESTO -->
            <div class="card-body d-flex flex-column justify-content-between">
                    <!-- TITOLO SERIE/FILM -->
                    <h4 class="card-title"><?php  echo $production->name === $production->original_name ? $production->name :  $production->name . ' - ' . $production->original_name?></h4>

                    <div class="d-flex flex-column">
                        <!-- GENERE -->
                        <span class="card-text"><strong>Categorie:</strong> <?php echo implode(' - ', $production->gen) ?></span>
                    <?php if(get_class($production) == 'Movie' ): ?>
                        <!-- ISTANZE FILM -->
                        <span class="card-text"><strong>Data di uscita:</strong> <?php echo $production->published_year ?></span>
                        <span class="card-text"><strong>Durata:</strong> <?php echo $production->duration ?> min</span>


                <?php else: ?>
                    <!-- ISTANZE TVSERIE -->
                        <span class="card-text"><strong>Prima puntata:</strong> <?php echo $production->published_year ?></span>
                        <span class="card-text"><strong>Puntata finale:</strong> <?php echo $production->aired_to_year ?></span>
                        <span class="card-text"><strong>Numero di episodi:</strong> <?php echo $production->number_of_episodes ?></span>
                        <span class="card-text"><strong>Numero di stagioni:</strong> <?php echo $production->number_of_seasons ?></span>
                <?php endif; ?>
                    </div>


            </div>

        </div>

        <?php endforeach; ?>

        </div>
        <?php endif; ?>
    </div>

</body>
</html>