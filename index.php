<?php


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

    <form id="box" action="form.php" method="get" class="text-center d-flex flex-column   ">
        <label for="paragraph" >Scrivi una frase</label>
        <input name="paragraph" id="paragraph" type="text"></input>
     
        <br>
        <br>
        <label for="censura">Censura la parola:</label>
        <input type="text" name="censura">
        <input type="submit" class="btn btn-primary w-25 my-1"></input>
    </form>
        




   
    
</body>

</html>