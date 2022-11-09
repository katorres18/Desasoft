<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.2</title>
</head>
<body>
    <?php
    include("class/class_lib.php");
    $factorial;
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['numero'] != "")
            {
                $factorial = new factorial($_REQUEST['numero']);
                $factorial->valida_factorial();
            }
            else{
                echo "Favor coloque el numero";
            }
        }
        else 
        {
            ?>
            <FORM action = "lab82.php" method="POST">
                Introduzca un numero: <Input type="text" name="numero"><br>
                <input type="submit" name="enviar" value="Enviar datos">
        </form>
       <?php   
        }
        ?>
</body>
</html>