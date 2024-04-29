<?php


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

<body>
<h1 class="text-center">Bad Words</h1>
    <form action="form.php" method="get" class="text-center d-flex flex-column w-50 m-3 ">
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