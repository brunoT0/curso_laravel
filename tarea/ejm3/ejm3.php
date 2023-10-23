<?php
// Definir las dos matrices
$matrix1 = array(
    array(1, 2, 3),
    
   
array(4, 5, 6),
);

$matrix2 = array(
    array(7, 8),
    array(9, 10),
    
   
array(11, 12),
);

// Función para multiplicar dos matrices
function multiplyMatrices($matrix1, $matrix2) {
    $result = array();

    

   
$rows1 = count($matrix1);
    $cols1 = count($matrix1[0]);
    $cols2 = count($matrix2[0]);

    

   
for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $cols1; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    
           
return $result;
}

// Verificar si las matrices son compatibles
if (count($matrix1[0]) == count($matrix2)) {
    $resultMatrix = multiplyMatrices($matrix1, $matrix2);

    // Mostrar el resultado
    echo "Matriz 1:<br>";
    
   
foreach ($matrix1 as $row) {
        echo implode(" ", $row) . "<br>";
    }

    
    }

   
echo "Matriz 2:<br>";
    foreach ($matrix2 as $row) {
        echo implode(" ", $row) . "<br>";
    }

    echo "Resultado de la multiplicación:<br>";
    foreach ($resultMatrix as $row) {
        
       
echo implode(" ", $row) . "<br>";
    }
} else {
    echo "Las matrices no son compatibles para la multiplicación.";
}
?>