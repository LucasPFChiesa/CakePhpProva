<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda[]|\Cake\Collection\CollectionInterface $vendas
 */
?>
<div class="vendas index content">
    <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th><?= $this->Paginator->sort('endereco_entrega') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td><?= $this->Number->format($venda->id) ?></td>
                    <td><?= $venda->has('cliente') ? $this->Html->link($venda->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $venda->cliente->id]) : '' ?></td>
                    <td><?= $venda->has('produto') ? $this->Html->link($venda->produto->id, ['controller' => 'Produtos', 'action' => 'view', $venda->produto->id]) : '' ?></td>
                    <td><?= h($venda->data) ?></td>
                    <td><?= h($venda->endereco_entrega) ?></td>
                    <td><?= h($venda->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
