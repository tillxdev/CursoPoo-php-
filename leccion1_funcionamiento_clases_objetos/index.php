
<?php
    
    require_once("classOperacion.php");
    $operacion1 = new Operacion(10, 2);
    $operacion2 = new Operacion(100,3);

    $totalSuma = $operacion2->getSuma();
    $totalResta= $operacion2->getResta();
    $totalMultiplicacion= $operacion2->getMultiplicacion();
    $totalDivision= $operacion1 ->getDivision();
    echo "Total suma: ". $totalSuma;
    echo "<br>";
    echo "Total suma: ". $totalResta;
    echo "<br>";
    echo "Total suma: ". $totalMultiplicacion;
    echo "<br>";
    echo "Total suma: ". $totalDivision;
    echo "<br>";


?> 