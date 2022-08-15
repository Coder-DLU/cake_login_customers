<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale[]|\Cake\Collection\CollectionInterface $sales
 */
?>
<div class="sales index content">
    <?= $this->Html->link(__('New Sale'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sales') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('seller_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sales as $sale): ?>
                <tr>
                    <td><?= $this->Number->format($sale->seller_id) ?></td>
                    <td><?= h($sale->name) ?></td>
                    <td><?= h($sale->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sale->seller_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->seller_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->seller_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->seller_id)]) ?>
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
