<?php

require_once 'vendor/autoload.php';

use Alura\Reflection\ClasseExemplo;

$reflectionClass = new ReflectionClass(ClasseExemplo::class);
$propriedade = $reflectionClass->getProperty('propriedadePublica');

var_dump($propriedade->getAttributes()[0]->getName());
