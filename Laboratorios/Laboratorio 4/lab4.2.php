<?php
$num1 = $_POST['num'];
function obtener_factorial($num1)
{
   if($num1==1)
      return 1;
   else
      return $num1 * obtener_factorial($num1-1);
} 
$resultado = obtener_factorial($num);
echo "<br/> El factorial es ". $resultado ;
?>