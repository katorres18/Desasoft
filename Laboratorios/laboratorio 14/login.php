<?php
session_start();

if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave'])){
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    $salt = substr ($usuario, 0, 2);
    $clave_crypt = crypt ($clave, $salt);

    require_once("class/usuarios.php");

    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->validar_usuario($usuario,$clave_crypt);

    foreach ($usuario_validado as $array_resp) {
        foreach ($array_resp as $value) {
            $nfilas=$value;
        }
    }

    if ($nfilas > 0){
        $usuario_valido = $usuario;
        $_SESSION["usuario_valido"] = $usuario_valido;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 14 - Login al sitio de Noticias</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <?php 
    // sesión iniciada
    if (isset($_SESSION["usuario_valido"]))
    {
    ?>
    <H1>Gestion de noticias</H1>
    <HR>
    <UL>
        <LI><A href="lab142.php">Listar todas las noticias</A>
        <LI><A href="lab143.php">Listar noticias por partes</A>
        <LI><A href="lab144.php">Buscar noticia</A>
    </UL>

    <HR>
    <P>[ <A HREF="logout.php">Desconectar</A> ] </P>
    <?php 
    }
    // Intento de entrafa fallido
    else if (isset ($usuario))
    {
        print ("<BR><BR>\n");
        print ("<P align='CENTER'>Acceso no autorizado</p>\n");
        print ("<P align='CENTER'>[ <A href='login.php'>Conectar</A> ]</P>\n");
    }
    // Sesión no iniciada
    else {
        print("<BR><BR>\n");
        print("<P CLASS='parrafocentrado'>Esta zona tiene el acceso restringido.<BR> ".
        " Para entrar debe identificarse</P>\n");
        print("<FORM class='entrada' name='login' ACTION='login.php' METHOD='POST'>\n");

        print("<P><label class='etiqueta-entrada'>Usuario:</label>\n");
        print("   <input type='text' name='usuario' size='15'></P>\n");
        print("<P><Label class='etiqueta-entrada'>Clave:</Label>\n");
        print("   <input type='password' name='clave' size='15'></p>");
        print("<p><input type='submit' value='entrar'></p>\n");
        print("</FORM>\n");

        print("<P class='parrafocentrado'>NOTA: si no dispone de identificacion o tiene problemas ".
        "para entrar <BR> pongase en contacto con el ".
        "<A HREF='MAILTO:webmaster@localhost'>administrador</A> del sitio</P>\n");
    }
    ?>
</body>
</html>