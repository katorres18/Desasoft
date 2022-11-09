<?php
include("class/class_lib.php");
$table;
if(array_key_exists('enviar', $_POST)){
    
    $numero = $_POST['numero'];
    $table = new table($_REQUEST['numero']);
                $table->genera_tabla();
}
else{
    ?>
    <!DOCTYPE HTML>
    <html>
        <head>
            <title>Parcial 1</title>
            <meta charset="utf-8">
        </head>
        <body>
            <form name="formularioDatos" method="post" action="lab83.php">
                <p>MATRIZ DIAGONAL</P>
                <br/>
                Introduzca un numero impar: <input type="number" name="numero" value="">
                <input value="Procesar" name="enviar" type="submit" />
            </form>     
        </body>    
    </html>
<?php 
}
?>