<?php

$x = 10;

$y = &$x;

echo $x;
echo "<br>";
echo $y;

$y = 15;

echo "Atriuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;

echo "Atriuição após ref 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "Pedro";

$nome2 = &$nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Jose";

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";