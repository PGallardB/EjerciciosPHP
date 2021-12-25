<?php 
$repite= $_POST["repite"];
$trabaja = $_POST["trabaja"];

$verifica_repite = isset($repite) ? "Repite" : "No repite ";
$verifica_trabaja = isset($repite) ? "Trabaja" : "No trabaja";

echo "$verifica_repite y $verifica_trabaja";

?>