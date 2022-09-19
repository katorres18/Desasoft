<html 

<head>
   <title>Laboratorio 2.4</title>
</head>

<body>
    <?php
    //creacion del arreglo array ("clave=> "valor")
    $personas = array("juan" => "panama", "jhon" => "usa", "eica" => "finlandia", "kusanagi" => "japon");
    // Recorrer todo el arreglo
    foreach ($personas as $persona => $pais) {
        print "$persona es de $pais <br>";
    }
    //impresió especifica
    echo "<br>". $personas["juan"];
    echo "<br>".$personas ["eica"];?>
    </body>

</html>