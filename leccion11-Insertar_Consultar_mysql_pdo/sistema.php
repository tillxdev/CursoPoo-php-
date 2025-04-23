<?php
    require_once("autoload.php");
    
    $objeUsuario = new Usuario();

    //inserta registros
    
    //$idInsert= $objeUsuario->insertUsuario("luis", 966290548,"luis_99@gmail.com");
    //echo $idInsert;

    //extrae todos los registros 
    $users =$objeUsuario -> getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");

?>  