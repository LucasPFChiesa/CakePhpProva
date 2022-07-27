<?php

namespace App\Model\Entity;

use phpDocumentor\Reflection\Types\Boolean;

class Venda
{
    private $id;
    private $data;
    Private $endereçoEntrega;
    private bool $isPago;

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



}
