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
    print_r("</pre>"."<br>");


    //actualiza registros
    //$updateUser= $objeUsuario -> updateUsuario(2,"jorge",123456789,"jorge99@gmail.com");
    //print $updateUser;

    //$users =$objeUsuario -> getUsuarios();
    //print_r("<pre>");
    //print_r($users);
    //print_r("</pre>");

    //obtener un registro
    //$getUser= $objeUsuario ->getUser(2);
    //print_r("<pre>");
    //print_r($getUser);
    //print_r("</pre>");

    //eliminar un usuario
    $delUser= $objeUsuario->deluser(2);
    print_r($delUser);

    $users =$objeUsuario -> getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>"."<br>");

?>  