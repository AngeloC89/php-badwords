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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script type="module" src="./js/script.js"></script>
    <title>Bad Words</title>
</head>

<body class="p-2">
   
<!-- frase senza censure -->
    <h2>Frase scritta:</h2>
    <p><?php echo $paragraph ?></p> 
    <p>Lunghezza prima della censura: <?php echo $lenBefore ?></p>
  
    <!-- frase censurata -->
    <h2>Frase censurata:</h2>
    <p><?php echo $fraseCensurata ?></p>
    <p>Lunghezza dopo la censura: <?php echo $lenAfter ?></p>





   
   
    
</body>

</html>