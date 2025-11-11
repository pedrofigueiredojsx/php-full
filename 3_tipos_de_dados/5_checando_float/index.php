<?php

$a = 'teste';
$b = 12.8;

if (is_float($a)) {
  echo 'È float! <br>';
}

if (is_float($b)) {
  echo 'È float 2! <br>';
}

if (is_float(165.65)) {
  echo 'È float 3! <br>';
}

if (is_float('teste')) {
  echo 'È float 3! <br>';
}