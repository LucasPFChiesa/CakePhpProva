<?php

namespace App\Model\Entity;

class Produto
{

    private $id;
    private $nome;
    private $descriçao;
    private $categoria;
    private $preço;

    /**
     * @param $id
     * @param $nome
     * @param $descriçao
     * @param $categoria
     * @param $preço
     */
    public function __construct($id, $nome, $descriçao, $categoria, $preço)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descriçao = $descriçao;
        $this->categoria = $categoria;
        $this->preço = $preço;
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
     * @return mixed
     */
    public function getDescriçao()
    {
        return $this->descriçao;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @return mixed
     */
    public function getPreço()
    {
        return $this->preço;
    }

}
