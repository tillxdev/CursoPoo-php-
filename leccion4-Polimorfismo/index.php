<?php

/*
Aqui la cosa es asi:
Producto hereda mueble y a la clase mesa
porque?: porque mueble es un producto y mesa es un mueble :),
por ello es que si creamos el objeto mesa podemos usar en escala todos los atributos y metodos 
porque estan que heredan en cadena por ej: mesa hereda de mueble hereda de producto
por lo tanto mesa puede ocupar lo que tiene mueble y producto y los mismos de el :)
*/
require_once("classMesa.php");

$objCama = new producto("cama",140);
$arrInfoProducto= $objCama->getInfoProducto();
print  "<pre>";
print_r ($arrInfoProducto);//para ver el contenido de un array
print "</pre>";

$objMueble= new mueble("Ropero",500,"Mueblex","Café","Madera");
$arrInfoMueble= $objMueble->getInfoProducto();

print "<pre>";
print_r ($arrInfoMueble);//para ver el contenido de un array
print "</pre>";

$objMesa= new mesa("mesa de comedor",450,"Nochex","Negro","Melanina","3mts");
$objMesa-> setForma("Redonda");
$arrInfoMesa= $objMesa->getInfoProducto();

print "<pre>";
print_r ($arrInfoMesa);//para ver el contenido de un array
print "</pre>";

//curiosidades: si borras el metodo del objeto como esta heredando en escala utiliizara el siguiente
//y obviamente no mostrara todo lo que le pasas pero si lo hara al menos con lo minimo que 
//acepta ese constructor 

/*
final class mesa extends mueble{}

°si le pones final quiere decir que esa es la ultima clase y ya no puede heredar de otra clase
Nota: en php no se puede hacer multiples herencias para eso se utilizan las interfaces, en la siguiente clase
*/


?>