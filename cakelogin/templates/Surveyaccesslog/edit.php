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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $surveyaccesslog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $surveyaccesslog->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Surveyaccesslog'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="surveyaccesslog form content">
            <?= $this->Form->create($surveyaccesslog) ?>
            <fieldset>
                <legend><?= __('Edit Surveyaccesslog') ?></legend>
                <?php
                    echo $this->Form->control('SYAIN_CD');
                    echo $this->Form->control('SELLER_ID');
                    echo $this->Form->control('CUSTOMER_ID');
                    echo $this->Form->control('FUNCTION_ID');
                    echo $this->Form->control('ACCESS_LOG_LEVEL');
                    echo $this->Form->control('ACCESS_DT');
                    echo $this->Form->control('YYYYMM');
                    echo $this->Form->control('HOUR');
                    echo $this->Form->control('WEEKDAY');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
