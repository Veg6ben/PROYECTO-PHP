<?php include 'includes/header.php';


// While 

$i = 0; //Inicializador

while ($i < 10) {
    
    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// DO While 
$i = 100 ;

do {
    echo $i . "<br>";

    $i++;
} while ($i <10);


/**
 * *3 imprimir fizz
 * *5 imprimir buzz
 * *3 y 5 imprimir FIZZ BUZZ
 */

 // For Loop.

 for ($i = 1; $i < 1000; $i++ ) {
     if($i % 3 === 0 && $i % 5 === 0)  { 
         echo $i . " - Buzz <br/>";
     } else if ($i % 3 === 0) {
         echo $i . " - Fizz <br/>";
     } else if($i % 5 === 0) {
         echo $i . " - Buzz <br/>";
     } else {
      echo $i . "<br/>";
     }
 }

include 'includes/footer.php';
