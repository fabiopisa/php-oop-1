<!-- - create un file index.php
- includete una classe “Movie”
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
BONUS:
1 Utilizzare almeno una proprietà e un metodo privato
2 Utilizzare almeno una proprietà e un metodo statico -->

<?php

require_once __DIR__ . '/Movie.php';

$film_1 = new Movie('Slevin', 'Triller',9);
$film_2 = new Movie('Doom', 'Fantascienza',7.5);
$film_3 = new Movie('Voglio mangiare il tuo pancreas', 'Anime, Romantico',10);
$film_4 = new Movie('Alien', 'Triller, Fantascienza, horror',10);





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP 1</title>
</head>
<body>
  <h3>Film 1</h3>
  <ul>
    <li>Titolo film: <?php echo $film_1->title ?></li>
    <li>Genere: <?php echo $film_1->genre ?></li>
    <li>Voto: <?php echo $film_1->getVote() ?></li>
  </ul>
  <h3>Film 2</h3>
  <ul>
    <li>Titolo film: <?php echo $film_2->title ?></li>
    <li>Genere: <?php echo $film_2->genre ?></li>
    <li>Voto: <?php echo $film_2->getVote() ?></li>
  </ul>
  <h3>Film 3</h3>
  <ul>
    <li>Titolo film: <?php echo $film_3->title ?></li>
    <li>Genere: <?php echo $film_3->genre ?></li>
    <li>Voto: <?php echo $film_3->getVote() ?></li>
  </ul>
  <h3>Film 4</h3>
  <ul>
    <li>Titolo film: <?php echo $film_4->title ?></li>
    <li>Genere: <?php echo $film_4->genre ?></li>
    <li>Voto: <?php echo $film_4->getVote() ?></li>
  </ul>

  <h2>Quanti film sono stati inseriti: <?php echo Movie::getCounter()?></h2>
</body>
</html>