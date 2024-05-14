<?php

namespace Alura\Reflection;

use JsonSerializable;

class ClasseExemplo implements JsonSerializable
{
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct(
        // int $parametro1, int $parametro2
    )
    {
        echo 'Executando construtor de ' . __CLASS__;
    }

    public function metodoPublico(
        string $mensagem, int $numero
    ): void {
        echo 'Executando método público' . $mensagem . $numero . PHP_EOL;
    }

    protected function metodoProtegido(): int
    {
        echo 'Executando método protegido';
        return 1;
    }

    private function metodoPrivado(int $a): void
    {
        echo 'Executando método privado';
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
