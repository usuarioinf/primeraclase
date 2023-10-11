<?php
$nombre="Josue Israel Arista";
echo $nombre;
require 'vendor/autoload.php';
use Luecano\NumeroALetras\NumeroALetras;


echo "<br>";

$formatter = new NumeroALetras();
echo $formatter->toWords(8716); echo " ";


?>