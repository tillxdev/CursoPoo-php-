<?php
require_once("classMueble.php");

class mesa extends mueble {
    private $strForma="";
    private $strTamanio;

    public function __construct(string $descripcion, float $precio, string $marca, string $color,string $material, string $tamanio) {
        parent::__construct($descripcion, $precio, $marca,$color, $material);
        $this->strTamanio=$tamanio;
    }
    public function setForma(string $forma){
        $this->strForma=$forma;
    }

    public function getInfoProducto(){//redefiniendo el metodo
        //array asociativo
        $arrProducto = array('producto '=>$this->strDescripcion,
        'precio' =>$this->fltPrecio,
        'stock_minimo' =>$this->intStockMinimo,
        'estado' =>$this->strStatus,
        'color' =>$this->strColor,
        'material' =>$this->strMaterial,
        'tamaño' =>$this->strTamanio,
        'forma' =>$this->strForma
    );
    return $arrProducto;
    }

}//fin de mesa

?>