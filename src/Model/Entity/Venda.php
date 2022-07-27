<?php

namespace App\Model\Entity;

use phpDocumentor\Reflection\Types\Boolean;

class Venda
{
    private $id;
    private $data;
    Private $endereçoEntrega;
    private bool $statusPagamento;

    /**
     * @param $dataVenda
     * @param $endereçoEntrega
     * @param bool $isPago
     */
    public function __construct($data, $endereçoEntrega, bool $isPago)
    {
        $this-$data = $data;
        $this->endereçoEntrega = $endereçoEntrega;
        $this->isPago = $isPago;
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
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getEndereçoEntrega()
    {
        return $this->endereçoEntrega;
    }

    /**
     * @return bool
     */
    public function isPago(): bool
    {
        return $this->isPago;
    }

}
