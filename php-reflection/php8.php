<?php

require_once 'vendor/autoload.php';

use Alura\Reflection\ClasseExemplo;

$reflectionClass = new ReflectionClass(ClasseExemplo::class);
try {
  $propriedade = $reflectionClass->getProperty('propriedadePublica');
} catch (ReflectionException $e) {
  echo $e->getMessage();
}

var_dump($propriedade->getAttributes()[0]->getName());
