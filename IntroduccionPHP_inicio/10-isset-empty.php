<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro', 'Felipe', 'Karen');

//Empy - revisa si un arreglo esta vacio
var_dump(empty($clientes) );
var_dump(empty($clientes2) );
var_dump(empty($clientes3) );

//Isset - revisar si un arreglo esta creado o una propiedad esta definida 
echo "<br>";
var_dump( isset($cliente4) );
var_dump( isset($cliente1) );
var_dump( isset($cliente2) );
var_dump( isset($cliente3) );

//Isset - Permite revisar si una propieda de un arreglo asociativo existe!!
var_dump( isset($cliente['nombre']) );
var_dump( isset($cliente['codigo']) );

include 'includes/footer.php';