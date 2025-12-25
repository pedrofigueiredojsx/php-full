<?php

$vel = 60;
$velMax = 40;

if ($vel < $velMax) {
  echo "Parabéns, você está uma velocidade segura<br>";
} else if($vel == $velMax) {
  echo "Cuidado você está no limite de velocidade<br>";
} else {
  echo "Você foi multado, velocidade acima do permitido<br>";
}
