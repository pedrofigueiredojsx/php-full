<?php

$a = 12;
$b = 89;
$c = "teste";

if (is_int($a) || is_float($a)) {
  $mult = $a * 2;

  if ($mult > 100) {

    echo "O número é maior que 100 <br>";
  } else {
    echo "O número não é maior que 100 <br>";
  }
} else {
  echo "não é um número <br>";
}


if (is_int($a) || is_float($a)) {
  $multi1 = $b * 2;

  if ($multi1 > 100) {

    echo "O número é maior que 100 <br>";
  } else {
    echo "O número não é maior que 100 <br>";
  }
} else {
  echo "não é um número <br>";
}

if (is_int($c) || is_float($c)) {
  $mult = $c * 2;

  if ($mult > 100) {

    echo "O número é maior que 100 <br>";
  } else {
    echo "O número não é maior que 100 <br>";
  }
} else {
  echo "não é um número <br>";
}
