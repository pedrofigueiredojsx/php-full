<?php

$carro = ["marca" => "VW", "portas" => 4, "teto_solar" => true, "blindado" => false, "velocidade_max" => 300];

print_r($carro);
echo "<br>";


echo $carro["marca"];
echo "<br>";
echo $carro["teto_solar"];

$marca = $carro["marca"];
$velocidade_max = $carro["velocidade_max"];

echo "<br>";
echo "O carro é da marca $marca e atinge no maximo $velocidade_max km/h"; 