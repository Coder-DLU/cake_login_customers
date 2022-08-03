<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Companys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="companys form content">
            <?= $this->Form->create($company) ?>
            <fieldset>
                <legend><?= __('Add Company') ?></legend>
                <?php
                    echo $this->Form->control('login_id',['type'=>'text']);
                    echo $this->Form->control('password');
                    // echo $this->Form->control('del_flg',["value"=>0]);
                ?>
                <input type="name" name="del_flg" value="0" hidden>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
