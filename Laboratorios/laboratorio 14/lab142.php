<?php
    session_start();
    if (isset($_SESSION["usuario_valido"]))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 9.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de noticias</h1>
   <?php
   require_once("class/noticias.php");

   $obj_noticia = new noticia();
   $noticias = $obj_noticia->consultar_noticias();

   $nfilas=count($noticias);

   if ($nfilas > 0){
    print ("<TABLE>\n");
    print ("<TR>\n");
    print ("<TH>Titulo</th>\n");
    print ("<TH>Texto</th>\n");
    print ("<TH>Categorias</th>\n");
    print ("<TH>Fecha</th>\n");
    print ("<TH>Imagen</th>\n");
    print ("</TR>\n");

    foreach ($noticias as $resultado){
        print ("<TR>\n");
        print ("<TD>".$resultado['titulo']."</td>\n");
        print ("<TD>".$resultado['texto']."</td>\n");
        print ("<TD>".$resultado['categoria']."</td>\n");
        print ("<TD>".date("j/n/Y", strtotime($resultado['fecha']))."</td>\n");

        if ($resultado['imagen'] != ""){
            print ("<td><a target='_blank' href='img/".$resultado['imagen'].
            "'><IMG BORDER='0' src='img/iconotexto.gif'></A></TD>\n");
        }
        else{
            print("<TD>&nbsp;</td>\n");
        }
        print ("</TR>\n");
    }
    print("</table>\n");
   }
   else{
    print ("No hay noticias disponibles");
   } ?>
<p>[<A href='login.php'>Menu principal</a>]</p>
<?php
     } else
        {
            print("<BR><BR>\n");
            print("<P align='CENTER'>Acceso no autorizado</P>\n");
            print("<P align='CENTER'>[<a href='login.php' target='_top'>Conectar</a>]</p>\n");
        }
   ?> 
</body>
</html>