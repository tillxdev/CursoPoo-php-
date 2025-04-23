<?php



require_once("classUsuario.php");


$objUsuarioUno= new Usuario("segundoe elvis","elvishuancaflores@gmail.com","Admin");
$objAndrea= new Usuario("Andrea arana","andrea@info.com","Cliente");

echo $objUsuarioUno->strTipo;
echo "<br>";

#echo Usuario::$strEstado;//para instanciar lo que es un static
echo "<br>";

echo $objUsuarioUno->getPerfil();
echo "<br><br>";
echo $objAndrea ->setCambiarClave("123andrea");
echo $objAndrea ->getPerfil();
echo "<br>";

?>