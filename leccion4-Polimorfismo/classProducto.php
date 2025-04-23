<?php
class producto {
    public $strDescripcion ;
    public $fltPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus="Activo";

    function __construct(string $descripcion, float $precio){
        $this->strDescripcion=$descripcion;
        $this->fltPrecio=$precio;
    }

    public function getInfoProducto(){
        //array asociativo
        $arrProducto = array('producto '=>$this->strDescripcion,
        'precio' =>$this->fltPrecio,
        'stock_minimo' =>$this->intStockMinimo,
        'estado' =>$this->strStatus
    );
    return $arrProducto;
    }



}//fin de la clase producto


?>