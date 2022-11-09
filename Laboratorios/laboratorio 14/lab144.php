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
   <form action="lab92.php" name="FormFiltro" method="post">
    <br/>
    Filtrar por: <SELECT name="campos">
        <option value="texto" SELECTED>Descripcion
        <option value="titulo" >Titulo
        <option value="categoria" >categoria
</SELECT>
con el valor
<input type="text" name="valor">
<input name="ConsultarFiltro" value="Filtrar Datos" type="submit">
<input name="ConsultarTodos" value="Ver todos" type="submit">
   </form> 
   <?php
   require_once("class/noticias.php");

   $obj_noticia = new noticia();
   $noticias = $obj_noticia->consultar_noticias();

   if(array_key_exists('ConsultarTodos', $_POST)){
        $obj_noticia = new noticia();
        $noticias_new = $obj_noticia->consultar_noticias();
   }

   if(array_key_exists('ConsultarFiltro', $_POST)){
        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias_Filtro($_REQUEST['campos'], $_REQUEST['valor']);
   }

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
   }
   ?> 
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