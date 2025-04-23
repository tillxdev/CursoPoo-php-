<?php
//ejemplo de herencia
/*
esto va mas o menos asi :
         empleado(hereda todo de persona)
persona 
         cliente(hereda todo de persona)
*/


//CONTROLLERS
//los nombres de espacio definen los nombres de espacios para cada archivo
// sirven para diferenciar si hay dos clases en diferentes carpetas

//require_once("../controllers/Empleado.php");
//require_once("../controllers/Cliente.php");
//require_once("../controllers/Persona.php");
require_once("../autoload.php");

//nota: no es necesario requerir el autoload.php en los archivos persona.php, cliente.php y empleado.php
//ya que se está requiriendo en empresa.php
use controllers\Empleado;
use controllers\Cliente;
use controllers\Persona;


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


$mensaje = new Persona();

echo "<br>".$mensaje ->saludar();



?>