<?php 
$radio= $_POST["radio"];
$altura = $_POST["altura"];
$volumen = pow($radio, 2) * $altura * pi() ;

if (!is_numeric($altura)){
    echo "La altura debe ser un numero.";
    exit;
}

if (!is_numeric($radio)){
    echo "EL radio debe ser un numero.";
    exit;
}

echo "El volumen del cilindro es $volumen";

?>



