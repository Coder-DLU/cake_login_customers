<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers form content">
            <!-- <?= $this->Form->create($customer) ?> -->
            <?= $this->Form->create($customer,['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add Customer') ?></legend>
                <?php
                    echo $this->Form->control('avatar_url',['type'=>'file','accept'=>'image/*']);
                    // echo $this->Form->control('avatar_url');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('phone_number');
                    echo $this->Form->control('email');
                    echo $this->Form->control('address');
                    echo $this->Form->control('status');
                    echo $this->Form->control('delete_flg');
                    echo $this->Form->control('updated',['value'=>getdate(date_default_timezone_set('Asia/Ho_Chi_Minh'))]);
                    echo $this->Form->hidden('created_by',['value'=>$_SESSION['STAFF_SESSION']]);
                    echo $this->Form->hidden('updated_by',['value'=>$_SESSION['STAFF_SESSION']]);
                    echo $this->Form->control('seller_id', ['options' => $sales]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
