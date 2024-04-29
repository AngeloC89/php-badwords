<?php

$paragraph = $_GET['paragraph'];
$censura = $_GET['censura'];

$fraseCensurata = str_replace($censura, (str_repeat("*", strlen($censura))), $paragraph);

$lenBefore = strlen($paragraph);
$lenAfter = strlen($fraseCensurata);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Bad Words</title>
</head>

<body>
    <h1 class="text-center my-3">Bad Words</h1>
    <div id="box">
        <!-- frase senza censure -->
        <h2>Frase scritta:</h2>
        <p><?php echo $paragraph ?></p>
        <p>Lunghezza prima della censura: <?php echo $lenBefore ?></p>

        <!-- frase censurata -->
        <h2>Frase censurata:</h2>
        <p><?php echo $fraseCensurata ?></p>
        <p>Lunghezza dopo la censura: <?php echo $lenAfter ?></p>
    </div>





</body>

</html>