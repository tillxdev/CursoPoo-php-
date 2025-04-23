<?php

    require_once("Operacion.php");
    require_once("OperacionsBasicas.php");

    class Calcular implements Operacion, OperacionsBasicas{

        
        public function raizCuadrada(float $numero ):float{
            $total=sqrt($numero);
            return $total;
        }
        public function potencia(int $numero,int $potencia):int{
            $total = pow($numero,$potencia);
            return $total;
        }

        public function op_basica( float $cant1, float $cant2, string $operacion){
            if($operacion=="+")
            {
                $result= $cant1 + $cant2;

            }else if($operacion== "-")
            {
                $result= $cant1 - $cant2;
            }else if($operacion=="*")
            {
                $result= $cant1 * $cant2;
            }else if($operacion== "/")
            {
                $result= $cant1 / $cant2;
            }else 
            {
                $result= "operación no validad";
            }
            return $result;
            
        }
        
    }

?>