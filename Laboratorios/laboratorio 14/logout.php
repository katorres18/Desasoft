<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Desconectar</title>
</head>
<body>
    <?php
        if (isset($_SESSION["usuario_valido"]))
        {
            session_destroy();
            print ("<BR><BR><P align='CENTER'>Conexion finalizada</p>\n");
            print ("<P align='CENTER'>[<A href='login.php'>Conectar</a>]</p>\n");
        }
        else
        {
            print("<BR><BR>\n");
            print("<P align='CENTER'>No existe una conexion activa</P>\n");
            print("<P align='CENTER'>[<a href='login.php'>Conectar</a>]</p>\n");
        }
    ?>
</body>
</html>