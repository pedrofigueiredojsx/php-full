<?php

$i = 1;

$c = "variavel teste";

while ($i <= 10) {
  echo "Loop externo $i <br>";

  // segundo contador
  $j = 0;

  echo "$c <br>";

  while ($j <= 5) {
    echo "Loop interno $j <br>";

    echo "$c 2 <br>";

    $j++;
  }

  $i++;
}
