<?php


    trait Producto {
        public $strProducto;
        public $fltPrecio;
        public $intStock;

        /**
         * Summary of setProducto:crear producto
         */
        public function setProducto(string $producto, float $precio, int $stock){
            $this->strProducto = $producto; 
            $this->fltPrecio = $precio; 
            $this->intStock = $stock;   
        }

        public function getProducto():string{
            $strInfo="
                Producto: {$this->strProducto} <br>
                Precio: {$this->fltPrecio} <br>
                Stock: {$this -> intStock} <br><br>
            ";
            return $strInfo;
        }

        public function setStock(int $cantidad) {
            $this ->intStock -= $cantidad;
        }

    }

?>