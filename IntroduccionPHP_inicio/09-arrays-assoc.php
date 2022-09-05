<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Felipe',
    'saldo' => '283',
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
       ]
];


echo "<prev>";
var_dump($cliente['informacion']);
echo 
"</prev>";




include 'includes/footer.php';