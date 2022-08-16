<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Surveyaccesslog $surveyaccesslog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Surveyaccesslog'), ['action' => 'edit', $surveyaccesslog->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Surveyaccesslog'), ['action' => 'delete', $surveyaccesslog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $surveyaccesslog->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Surveyaccesslog'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Surveyaccesslog'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="surveyaccesslog view content">
            <h3><?= h($surveyaccesslog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('SYAIN CD') ?></th>
                    <td><?= h($surveyaccesslog->SYAIN_CD) ?></td>
                </tr>
                <tr>
                    <th><?= __('ACCESS DT') ?></th>
                    <td><?= h($surveyaccesslog->ACCESS_DT) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($surveyaccesslog->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('SELLER ID') ?></th>
                    <td><?= $this->Number->format($surveyaccesslog->SELLER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CUSTOMER ID') ?></th>
                    <td><?= $this->Number->format($surveyaccesslog->CUSTOMER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('FUNCTION ID') ?></th>
                    <td><?= $this->Number->format($surveyaccesslog->FUNCTION_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ACCESS LOG LEVEL') ?></th>
                    <td><?= $this->Number->format($surveyaccesslog->ACCESS_LOG_LEVEL) ?></td>
                </tr>
                <tr>
                    <th><?= __('YYYYMM') ?></th>
                    <td><?= h($surveyaccesslog->YYYYMM) ?></td>
                </tr>
                <tr>
                    <th><?= __('HOUR') ?></th>
                    <td><?= h($surveyaccesslog->HOUR) ?></td>
                </tr>
                <tr>
                    <th><?= __('WEEKDAY') ?></th>
                    <td><?= h($surveyaccesslog->WEEKDAY) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
