<?php

class Cliente
{
    private $id;
    private $nome;
    private DateTime $dataNasc;
    private $cpf_cnpj;
    private $endereço;
    private $contato=[];

    /**
     * @param $id
     * @param $nome
     * @param DateTime $dataNasc
     * @param $cpf_cnpj
     * @param $endereço
     * @param array $contato
     */
    public function __construct($id, $nome, DateTime $dataNasc, $cpf_cnpj, $endereço, array $contato)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->dataNasc = $dataNasc;
        $this->cpf_cnpj = $cpf_cnpj;
        $this->endereço = $endereço;
        $this->contato = $contato;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return DateTime
     */
    public function getDataNasc(): DateTime
    {
        return $this->dataNasc;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpf_cnpj;
    }

    /**
     * @return mixed
     */
    public function getEndereço()
    {
        return $this->endereço;
    }

    /**
     * @return array
     */
    public function getContato(): array
    {
        return $this->contato;
    }



}
