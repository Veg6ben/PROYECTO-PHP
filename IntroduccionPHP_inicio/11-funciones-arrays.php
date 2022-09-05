<?php include 'includes/header.php';
// in_array - buscar elementos de un arreglo
$carrito = ['tablet', 'Computadora', 'Television'];

var_dump( in_array('tablet', $carrito) );
var_dump( in_array( 'audifonos', $carrito) );

//Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array (
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Felipe'

);
echo "<pre>";
var_dump($cliente); 
echo "</pre>";

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); //Ordena por valores Z primero
ksort($cliente); // Ordena por llaves (orden alfabetico);
ksort($cliente); // Ordena por llaves (orden alfabetico, de la z a la a);

echo "<pre>";
var_dump($cliente);
 "</pre>";

include 'includes/footer.php';