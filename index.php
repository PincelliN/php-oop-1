<?php

// Includi il file che contiene il database dei film
require_once __DIR__.'/data/db.php';

require_once __DIR__.'/Classes/producer.php';
// Includi la classe Movie che definisce la struttura di un film
require_once __DIR__.'/Classes/movie.php';

// var_dump($db_movies);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Oop Movie</title>
</head>

<body>


    <div class="container">
        <div class="row d-flex">
            <!-- Ciclo attraverso ciascun film presente nel database $db_movies -->
            <?php foreach($db_movies as $Movie):?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <!-- Titolo del film -->
                    <h5 class="card-title"><?php echo $Movie->title?></h5>
                    <!-- Nome del regista del film -->
                    <h6 class="card-subtitle mb-2 text-body-secondary">Direttore:
                        <?php echo $Movie->director->name . ' ' . $Movie->director->lastname?>
                    </h6>
                    <!-- Lista di informazioni aggiuntive del film -->
                    <ul>
                        <!-- Lingua del film -->
                        <li> <?php echo $Movie->lenguage?></li>
                        <!-- Anno di produzione del film -->
                        <li>Anno di Produzione: <?php echo $Movie->production_date ?></li>
                        <!-- Durata del film in formato ore:minuti -->
                        <li>Durata: <?php echo $Movie->getHour()?></li>
                        <!-- Elenco dei generi del film -->
                        <li>Generi:<?php echo $Movie->listgenres() ?></li>
                    </ul>
                </div>
            </div>
            <?php endforeach ?>

        </div>
    </div>

</body>

</html>