<?php
final class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }
    final public function moreTesting() {
        echo "ClaseBase::moreTesting() llamada\n";
    }
}
 class clasehijo extends ClaseBase {
}
?>
// la clase llamada "ClaseBase" no puede tener hijos