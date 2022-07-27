<?php

namespace App\Model\Entity;

class Cliente
{

    private $nome;
    private $dataNasc;
    private $endereço;
    private $contato=[];

    /**
     * @param $nome
     * @param $dataNasc
     * @param $endereço
     * @param array $contato
     */
    public function __construct($nome, $dataNasc, $endereço, array $contato)
    {
        $this->nome = $nome;
        $this->dataNasc = $dataNasc;
        $this->endereço = $endereço;
        $this->contato = $contato;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function getEndereço()
    {
        return $this->endereço;
    }

    public function getContato(): array
    {
        return $this->contato;
    }
}
