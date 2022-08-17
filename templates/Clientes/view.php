<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientes view content">
            <h3><?= h($cliente->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cliente->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf Cnpj') ?></th>
                    <td><?= h($cliente->cpf_cnpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($cliente->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fone') ?></th>
                    <td><?= h($cliente->fone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nasc') ?></th>
                    <td><?= h($cliente->data_nasc) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vendas') ?></h4>
                <?php if (!empty($cliente->vendas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Endereco Entrega') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->vendas as $vendas) : ?>
                        <tr>
                            <td><?= h($vendas->id) ?></td>
                            <td><?= h($vendas->cliente_id) ?></td>
                            <td><?= h($vendas->produto_id) ?></td>
                            <td><?= h($vendas->data) ?></td>
                            <td><?= h($vendas->endereco_entrega) ?></td>
                            <td><?= h($vendas->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
