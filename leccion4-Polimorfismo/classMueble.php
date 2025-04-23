<?php
require_once("classProducto.php");

class mueble extends producto {
    public $strColor;
    public $strMaterial;
    public $strStatus="Agotado";//redifiniendo propiedad
    
    public function __construct(string $descripcion, float $precio, string $marca, string $color, $material) {
        parent::__construct($descripcion, $precio) ;
        $this->strColor = $color;
        $this->strMaterial = $material;
    }
    
    public function getInfoProducto(){//redefiniendo el metodo
        //array asociativo
        $arrProducto = array('producto '=>$this->strDescripcion,
        'precio' =>$this->fltPrecio,
        'stock_minimo' =>$this->intStockMinimo,
        'estado' =>$this->strStatus,
        'color' =>$this->strColor,
        'material' =>$this->strMaterial
    );
    return $arrProducto;
    }

}//fin de la clase mueble


?>