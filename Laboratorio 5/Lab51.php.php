<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliete']['tmp_name']))
{

    $nombreDirectorio="archivos/";
    $nombrearchivo=$_FILES['nombre_archivo_cliente']['name'] ;
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;

    if (is_file($nombreCompleto))
    {
        if (is_file) 
        $idUnico= time();
        $nombrearchivo=$idUnico . "-"  $nombrearchivo;
        echo "Archivo repetido, se cambiara el nombre a $nombrearchivo; 
        <br><br>"
    }
move:uploaded_ file($_FILES ['nombre_archivo_cliente']['tmp_name'],$nombreDirectorio . $nombrearchivo);
echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio<br>";
}
else echo "No se ha podido suir el el archivo <br>";
?>