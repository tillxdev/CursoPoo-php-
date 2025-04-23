<?php
//ejemplo de herencia
/*
esto va mas o menos asi :
         empleado(hereda todo de persona)
persona 
         cliente(hereda todo de persona)
*/


require_once("classEmpleado.php");
require_once("classCliente.php");


$objEmpleado = new Empleado(7878,"elvis huanca",26);

$objEmpleado ->setPuesto("Administrador");
echo $objEmpleado->getDatosPersonales();
echo $objEmpleado->getPuesto();

echo" <br>";


$objCliente = new Cliente(896,"carlos",25);
$objCliente ->setCredito(1000);
echo $objCliente->getDatosPersonales();
echo $objCliente->getCredito();

/*
las superclase es : persona
las subclases son : cliente y empleado
*/

?>