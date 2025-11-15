<?php

$pessoa = [
  "nome" => "Pedro",
  "idade" => 27,
  "profissao" => "Programador"
];

if ($pessoa["idade"] >= 18) {
  echo "É maior de idade";
} else {
  echo "Não é maior de idade";
}