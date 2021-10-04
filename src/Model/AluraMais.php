<?php

namespace Assuncaovictor\Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel
{
    private string $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = new Slug($categoria);
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . $this->categoria . '/' . http_build_query(['nome' => $this->nome]);
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
