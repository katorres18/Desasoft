<!DOCTYPE html>
<html 

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 2.7</title>
</head>
<body>
    <?php
    $posicion = "arriba";
    switch ($posicion) {
        case "arriba": //Bloque1
            echo "La variable contiene";
            echo "el valor arriba";
            break;
        case "abajo": //bloque 2
            echo "La variable contiene";
            echo "el valor abajo";
            break;
        default: //bloque 3
            echo "La variable contiene otro valor";
            echo "distinto de arriba y abajo";
    }
    ?>
</body>
</html>