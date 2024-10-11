<?php
function errorController($nivel, $mensaje){
    switch ($nivel) {
        case E_WARNING:
            $str = "Advertencia";
            break;
        case E_NOTICE:
            $str = "Notificación";
            break;
            default:
            $str = "Error";
}
echo "<br><strong>$str </strong></br> $mensaje <br>";
}

set_error_handler('errorController');