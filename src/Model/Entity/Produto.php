<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $descricao
 * @property string|null $categoria
 * @property string $preco
 *
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Produto extends Entity
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
        'nome' => true,
        'descricao' => true,
        'categoria' => true,
        'preco' => true,
        'vendas' => true,
    ];
}
