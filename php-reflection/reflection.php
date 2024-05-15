<?php

require_once 'vendor/autoload.php';

use Alura\Reflection\ClasseExemplo;

// $objeto = new ClasseExemplo();
// var_dump($objeto);

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

$propriedadePublica = $reflectionClass->getProperty('propriedadePublica');
var_dump($propriedadePublica->getDocComment());

// var_dump($reflectionClass->getProperties());
$propriedadePrivada = $reflectionClass->getProperty('propriedadePrivada');

if ($propriedadePrivada->isPublic()) {
  $propriedadePrivada->setAccessible(true);
}

// var_dump(Reflection::getModifierNames($propriedadePrivada->getModifiers()));
var_dump($propriedadePrivada->getValue($reflectionClass->newInstanceWithoutConstructor()));


/* ---------Metodos:--------- */
// echo $reflectionClass;
// var_dump($reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED));
// $objetoClasseExemplo = $reflectionClass->newInstance();

$reflectionMethod = $reflectionClass->getMethod('metodoPublico');
var_dump($reflectionMethod->getDocComment());

$reflectionMethod = $reflectionClass->getMethod('metodoProtegido');
$reflectionMethod->setAccessible(true);
var_dump($reflectionMethod->invoke($reflectionClass->newInstanceWithoutConstructor()));

// var_dump($reflectionMethod->getParameters());
// $parameters = array_filter(
//   $reflectionMethod->getParameters(),
//   fn (ReflectionParameter $parameter) => !$parameter->isOptional()
// );
// foreach ($parameters as $parameter) {
//   if (!$parameter->hasType()) {
//     throw new DomainException('Não sei oque fazer aqui');
//   }
//   $tipo = (string) $parameter->getType();
//   // var_dump($tipo, $parameter->getType()->isBuiltin());
// }

// $reflectionMethod->invoke($objetoClasseExemplo, 'Mensagem qualquer ', 42);
// $reflectionMethod->invokeArgs($objetoClasseExemplo, ['Mensagem qualquer ', 42]);

// $interfaces = $reflectionClass->getInterfaces();
// $nomeClasse = $reflectionClass->getName();
// $modifiers = $reflectionClass->getModifiers();

// $objeto = new $nomeClasse();

// $objetoClasseExemplo = $reflectionClass->newInstanceArgs(/* [1, 2] */);
// $objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();
// var_dump($objetoClasseExemplo);

// echo json_encode($objetoClasseExemplo);
