<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
    <?php
        include("class/class_lib.php");
        $promedio;
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['promedio'] != "")
            {
                $promedio = new promedio($_REQUEST['promedio']);
                $promedio->valida_promedio();
            }
            else{
                echo "Favor coloque el promedio de ventas";
            }
        }
        else 
        {
            ?>
            <FORM action = "lab81.php" method="POST">
                Promedio de ventas: <Input type="text" name="promedio"><br>
                <input type="submit" name="enviar" value="Enviar datos">
        </form>
       <?php   
        }
        ?>
</body>
</html>