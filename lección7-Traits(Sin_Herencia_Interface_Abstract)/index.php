<?php
    //este archivo puedes llamarle ventas

    /**
     * En un trait podemos hacer declaraciones como lo hacemos en una clase public, private,static, protected...etc
     * Un trait no puede ser instanciado y para usarlos se pone use nomas.
     * Las clases no deben llamarse igual que los traits o viceversa
     * el trait no nos obliga a utilizar los metodos declarados
     */


    /**
      * Explicacion
      * Declaramos dos traits que son Carrito y Producto y los usamos en la ClassTienda 
      * Luego instanciamos en index a classTienda y realizamos la venta :)
      *     viste que no puedes instanciar directamente los traits!!!
      */

/**(aqui une xplicación mas a detalle :)  )
 * Traits:
 *    No requieren herencia ni la implementación de una interfaz.
 *    No obligan a que los métodos sean implementados ni sobrescritos.
 *    No son clases, solo son un conjunto de métodos y propiedades que puedes incluir en cualquier clase con la palabra clave use.
 *    No pueden ser instanciados, pero pueden incluir lógica compleja que puede ser reutilizada en varias clases.
 *
 *Herencia:
 *
 *    Las clases pueden heredar de una clase base, pero PHP no soporta herencia múltiple, es decir, una clase solo puede heredar de una clase.
 *    Con la herencia, heredas tanto propiedades como métodos de la clase base.
 *
 *Interfaces:
 *
 *    Las interfaces definen un conjunto de métodos que cualquier clase que implemente esa interfaz debe definir, pero no incluyen implementación.
 *    Solo definen los métodos, dejando que cada clase implemente su propia lógica.
 *
 *Clases abstractas:
 *
 *    Una clase abstracta puede contener métodos con o sin implementación, y las clases que hereden de ella deben implementar los métodos abstractos.
 *    Ofrecen una estructura más rígida que los traits.
 */


    require_once("ClassTenda.php");
    $objProducto= new Tienda();

    $objProducto->setProducto("Celular",500,10);
    echo $objProducto->getProducto();

    $objProducto -> setCarrito("Celular",2);//quizas aqui solo tomes el id para mostrarlo pero solo es un ej
    $objProducto ->setStock(2);
    echo $objProducto->getProducto();
    echo $objProducto -> getCarrito();
?>