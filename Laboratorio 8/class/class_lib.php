<?php
class promedio {
    var $promedio;
    var $imagen;

    function __construct($promedio){
        $this->promedio = $promedio;
        $this->imagen = "";
    }

    function valida_promedio(){
                if($this->promedio >= 80){
                    echo "<input type='image' src='verde.png'>";
                } 
                if ($this->promedio > 50 && $this->promedio <= 79){
                    echo "<input type='image' src='amarillo.png'>";
                } 
                if($this->promedio < 50){
                    echo "<input type='image' src='rojo.png'>";
                }
    }
}

class factorial {
    var $numero;

    function __construct($numero){
        $this->numero = $numero;
    }

    function valida_factorial(){
        $resultado = 1;
        $a = 1;
        while ($a < $this->numero) {
            $resultado = $resultado * ($a+1);
            $a++;
        }
        echo "El factorial de ".$this->numero." es: ".$resultado;
    }
}

class table {
    var $numero;

    function __construct($numero){
        $this->numero = $numero;
    }

    function genera_tabla(){
        if(is_numeric($this->numero)){
            if($this->numero % 2 == 0){
    
        define("TAM", $this->numero);
    
        echo "<table border=1>";
        for($n1=1; $n1<=TAM; $n1++)
        {
            echo "<tr>";
            for ($n2=1; $n2<=TAM; $n2++){
                if(($n1==$n2) || (($n1+$n2) == (TAM+1))){
                    $aletorio = rand(1,100);
                    if($n1==$n2){
                        $aletorio = '1';
                    } else {
                        $aletorio = '0';
                    } 
                    echo "<td>".$aletorio."</td>";
                }else{
                    echo "<td>0</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No es un valor par";
    }
    }else{
        echo "No es un valor númerico";
    }
    }
}

?>