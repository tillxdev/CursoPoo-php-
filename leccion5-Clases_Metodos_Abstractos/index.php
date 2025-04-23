<?php
//Metodos y clases Abstractos
/*
-No se pueden instanciar objetos de una clase abstracta.
    si las clase principal es abstracta todos los metodos que nosotros declaramos tambien lo seran.
-No pueden contener cuerpo los metodos abstractos.
    Los metodos abstractos se redefinen

-Si en la clase principal un metodo esta definido como private en las que lo heredan tu puedes definirlo como tipo public o menos 
        pero si esta como public ya no puedes redefinirlo a tipo private o protected.

.:.Cuando declaremos una clase abstracta y los metodos que implementemos 
        nosotros tambien tenemos que implementarlos en las clases que hereden a 
        esta clase osea ahi redifinimos los metodos antes declarados.
*/


require_once("classEmpleado.php");
require_once("classCliente.php");




//objeto empleado 

$objEmpleado = new Empleado(7878,"elvis huanca",26);

$objEmpleado ->setPuesto("Administrador");
echo $objEmpleado->setMensaje("Hola ayuda!!!! ");
echo $objEmpleado->getDatosPersonales();
echo "puesto : ".$objEmpleado->getPuesto()."<br>";

echo $objEmpleado->getMensaje();

echo "<br>";



//objeto cliente

$objCliente = new Cliente("562","Cristiano Ronaldo",41);
echo $objCliente->setCredito(2250);
echo $objCliente->setMensaje("Hola me pueden atender!!!! ");
echo $objCliente->getDatosPersonales();
echo "<br>";
echo $objCliente->getMensaje();







?>