<?php

$a = 4;
$b = 5;
$c = 6;
$d = 6;
$e = 7;

if ($a < $b) {
  echo "A é menor que B <br>";
}

if ($b < $a) {
  echo "B é menor que A <br>";
}

if ($d <= $c) {
  echo "D é menor ou igual a C <br>";
}

if ($d <= $a) {
  echo "D é menor ou igual a A <br>";
}

if ($d <= $e) {
  echo "D é menor ou igual a E <br>";
}
