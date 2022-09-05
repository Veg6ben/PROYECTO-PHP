<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

//util para ver los contenidos de un array(arreglo)
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//acceder a un elemento del array
echo $carrito[1];

//Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

//Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

//Añadir al inicio
array_unshift($carrito, 'Smartwatch');

//util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('cliente 1', 'cliente 2', 'cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];



include 'includes/footer.php';