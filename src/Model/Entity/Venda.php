<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int $produto_id
 * @property \Cake\I18n\FrozenTime|null $data
 * @property string $endereco_entrega
 * @property string|null $status
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Produto $produto
 */
class Venda extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'cliente_id' => true,
        'produto_id' => true,
        'data' => true,
        'endereco_entrega' => true,
        'status' => true,
        'cliente' => true,
        'produto' => true,
    ];
}
