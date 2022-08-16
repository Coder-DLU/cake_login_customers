<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Surveyaccesslog[]|\Cake\Collection\CollectionInterface $surveyaccesslog
 */
?>
<div class="surveyaccesslog index content">
    <?= $this->Html->link(__('New Surveyaccesslog'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Surveyaccesslog') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('SYAIN_CD') ?></th>
                    <th><?= $this->Paginator->sort('SELLER_ID') ?></th>
                    <th><?= $this->Paginator->sort('CUSTOMER_ID') ?></th>
                    <th><?= $this->Paginator->sort('FUNCTION_ID') ?></th>
                    <th><?= $this->Paginator->sort('ACCESS_LOG_LEVEL') ?></th>
                    <th><?= $this->Paginator->sort('ACCESS_DT') ?></th>
                    <th><?= $this->Paginator->sort('YYYYMM') ?></th>
                    <th><?= $this->Paginator->sort('HOUR') ?></th>
                    <th><?= $this->Paginator->sort('WEEKDAY') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surveyaccesslog as $surveyaccesslog): ?>
                <tr>
                    <td><?= $this->Number->format($surveyaccesslog->id) ?></td>
                    <td><?= h($surveyaccesslog->SYAIN_CD) ?></td>
                    <td><?= $this->Number->format($surveyaccesslog->SELLER_ID) ?></td>
                    <td><?= $this->Number->format($surveyaccesslog->CUSTOMER_ID) ?></td>
                    <td><?= $this->Number->format($surveyaccesslog->FUNCTION_ID) ?></td>
                    <td><?= $this->Number->format($surveyaccesslog->ACCESS_LOG_LEVEL) ?></td>
                    <td><?= h($surveyaccesslog->ACCESS_DT) ?></td>
                    <td><?= h($surveyaccesslog->YYYYMM) ?></td>
                    <td><?= h($surveyaccesslog->HOUR) ?></td>
                    <td><?= h($surveyaccesslog->WEEKDAY) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $surveyaccesslog->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $surveyaccesslog->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $surveyaccesslog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $surveyaccesslog->id)]) ?>
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
