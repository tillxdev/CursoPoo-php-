<?php
    /*  
        "si marca error es por la extensión que esta mal xd"
    Nota:
    *Todos los metodos en una clase declarada como interface son del tipo public sino no funciona.
    "En la clase donde se va a implementar(o herendar multiple) aqui debe ponerse el metodo tal y como se declaro 
            sino no funcionara
    *Las clases interface no necesitan constructor ni requieren, ni get ni sets ok.

    */



    /*
    explicacion:
    esto va de la siguiente manera mira el archivo classOperacion.php es quien con implements que son 
    para herencia multiple en otras palabras hereda a Operaciones basicas pero tambien a operacion 
    para eso sirve y tambien tener en cuenta requerir los archivos necesarios como lo son Operacion.php y 
    tambien OperacioBasicas.php con requier_once(); obviamente
    
    */

    require_once("classOperacion.php");
    $objRaiz= new Calcular();
    echo $objRaiz->raizCuadrada(9)."<br>";
    echo $objRaiz->potencia(4,2);





    echo "<br>";
    echo $objRaiz->op_basica(50,2,"+");


?>