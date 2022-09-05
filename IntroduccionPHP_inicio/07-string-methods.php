<?php include 'includes/header.php';


$nombreCliente = "Luis Felipe";

//conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//convertirlo a mayusculas
echo strtoupper($nombreCliente);

//convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Luis', 'L', $nombreCliente);


//Revisar si un string existe o no 
echo strpos($nombreCliente, 'Luis Felipe');

$tipoCliente = "Premium";

echo "<br>";

echo "el Cliente" . $nombreCliente . "es" . $tipoCliente;


include 'includes/footer.php';