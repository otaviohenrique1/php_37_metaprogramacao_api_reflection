<?php

require_once 'vendor/autoload.php';
// require_once __DIR__ . 'vendor/autoload.php';

use Alura\Reflection\ClasseExemplo;

echo __LINE__ . PHP_EOL;

$idade = 22;

// echo gettype($idade);

$variavel = 'idade';

echo $$variavel;

$nomeCompletoCLasse = 'Alura\Reflection\ClasseExemplo';
$nomeMetodo = 'metodoPublico';

$objeto = new $nomeCompletoCLasse(/* 1,2 */);

if(method_exists($objeto, $nomeMetodo)) {
  echo PHP_EOL;
  $objeto->$nomeMetodo();
  echo PHP_EOL;
}

var_dump($objeto);

var_dump(get_object_vars($objeto));

var_dump(is_a($objeto, ClasseExemplo::class));
var_dump($objeto instanceof ClasseExemplo);