<?php

namespace Alura\Solid\Service;

use Assuncaovictor\Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assistir(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
