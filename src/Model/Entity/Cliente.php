<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property \Cake\I18n\FrozenTime|null $data_nasc
 * @property string $cpf_cnpj
 * @property string $endereco
 * @property string|null $fone
 * @property string|null $email
 *
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Cliente extends Entity
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
        'data_nasc' => true,
        'cpf_cnpj' => true,
        'endereco' => true,
        'fone' => true,
        'email' => true,
        'vendas' => true,
    ];
}
