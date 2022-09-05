<?php include 'includes/header.php';


$autenticado = true;
$admin = false;

if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente";
}  else {
    echo "Usuario no autenticado, inicia sesion";
}


// If anidados...
$cliente = [
    'nombre' => 'Felipe',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo "<br>";

if( !empty($cliente) )  {
    echo "El arreglo de cliente no esta vacio";
    echo "<br>";

   if ($cliente['saldo'] > 0 ) {
    echo "el saldo del cliente esta disponible";
  } else {
    echo "no hay saldo";
  }
}

echo "<br>";

// else if
if ($cliente['saldo'] > 0 ) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es Premium";
} else {
    echo "no hay cliente definido o no tiene saldo o no es premium";
}

//Switch
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, es un excelente lenguaje";
      break;
      case 'Javascript':
        echo "Genial, el lenguaje de la web";
        break;
        case 'HTML':
            echo 'Emm...';
            break;
    default:
       echo "Algun lenguaje que no se cual es";
       break;
}


include 'includes/footer.php';