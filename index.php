<?php

require __DIR__ . '/Models/Movie.php';


$matrix = new Movie('Matrix', '100', 'Science-fiction');
$matrix->longOrShort($matrix->duration);

$spiderman = new Movie('Spiederman', '160', 'Fantasy');
$spiderman->longOrShort($spiderman->duration);

$il_gladiatore = new Movie('Il Gladiatore', '172', 'Historical');
$il_gladiatore->longOrShort($il_gladiatore->duration);

$cars = new Movie('Cars', '136', 'Animation');
$cars->longOrShort($cars->duration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!-- Bootstrap CSS v5.2.1 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <!-- Bootstrap JavaScript Libraries -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
      </script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
    <title>Film-php</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-align: center;
            padding: 1rem 2rem;
            border: 0;
            border-radius: 2rem;
        }
        body{
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         font-weight: 800;

        }
        h1{
            text-align: center;
        }

        h3{
            background-color: #ff3d43;

        }
        h4{
            background-color: #0090f2 ;
        }

        h5{
            background-color: orange;
        }

        .duration{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
   <div class="container">
    <h1>PHP's FILMS</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Title: <?php echo $spiderman->title ?></h3>
                <h4>Genere: <?php echo $spiderman->genre ?></h4>
                <h5 class="duration">Duration: <?php echo $spiderman->duration?></h5>
                <h5>Type: <?php echo $spiderman->type ?></h5>
            </div>
            <div class="col">
                <h3>Title: <?php echo $matrix->title ?></h3>
                <h4>Genere: <?php echo $matrix->genre ?></h4>
                <h5 class="duration">Duration: <?php echo $matrix->duration?></h5>
                <h5>Type: <?php echo $matrix->type ?></h5>
            </div>
            <div class="col">
                <h3>Title: <?php echo $il_gladiatore->title ?></h3>
                <h4>Genere: <?php echo $il_gladiatore->genre ?></h4>
                <h5 class="duration">Duration: <?php echo $il_gladiatore->duration?></h5>
                <h5>Type: <?php echo $il_gladiatore->type ?></h5>
            </div>
            <div class="col">
                <h3>Title: <?php echo $cars->title ?></h3>
                <h4>Genere: <?php echo $cars->genre ?></h4>
                <h5 class="duration">Duration: <?php echo $cars->duration?></h5>
                <h5>Type: <?php echo $cars->type ?></h5>
            </div>
        </div>
    </div>
   </div>

    <h2>  </h2>
</body>
</html>