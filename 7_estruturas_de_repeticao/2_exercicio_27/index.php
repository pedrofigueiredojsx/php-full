<?php

$arr = [5, "Pedro", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alo"];

$x = count($arr);

while ($y < $x) {

  if (is_string($arr[$y])) {
    echo $arr[$y] . "<br>";
  }

  $y++;
}
