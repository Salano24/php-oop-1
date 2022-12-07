<?php

require __DIR__ . '/Models/Movie.php';


$matrix = new Movie('Matrix', '100', 'Science-fiction');
$matrix->longOrShort($matrix->duration);
var_dump($matrix);

$spiderman = new Movie('Spiederman', '160', 'Fantasy');
$spiderman->longOrShort($spiderman->duration);
var_dump($spiderman);

$il_gladiatore = new Movie('Il Gladiatore', '172', 'Historical');
$il_gladiatore->longOrShort($il_gladiatore->duration);
var_dump($il_gladiatore);

?>