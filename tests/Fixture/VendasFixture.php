<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendasFixture
 */
class VendasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'cliente_id' => 1,
                'produto_id' => 1,
                'data' => '2022-08-17 14:04:01',
                'endereco_entrega' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
