<?php
/* 
function dividir($dividendo, $divisor){
    if($divisor == 0){
        throw new Exception("ERROR! División por cero");
}
return $dividendo / $divisor;
} try {
    $resultado = dividir(10, 0);
    echo "<h1>EL RESULTADO DE LA DIVISION ES:" . $resultado. "</h1>";
} catch (Exception $e) {
    echo "<p> SE GENERÓ UNA EXCEPCIÓN:" . $e->getMessage() ."</P>";
}
finally {   
    echo "<p>HAY RESULTADO SIEMPRE.";
}
