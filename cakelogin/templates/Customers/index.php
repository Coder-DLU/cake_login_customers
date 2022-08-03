<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?= $this->Url->build('/') ?>"><span>Cloud Nine Solutions</span> PHP</a>
    </div>
    <div class="top-nav-links">
        <button><a style='color: #fff !important; text-decoration: none'
                href="<?= $this->Url->build(['controller'=>'Companys', 'action'=>'logout']);?>">Logout</a></button>
    </div>
</nav>
<div style="display: block; width: 100%;background-color: black;height: 1px;margin-top: -30px; "></div>
<nav class="top-nav">
    <div class="top-nav-links">
        <button style='background-color: #0764c5 !important;border: none !important'>
            <a style='color: #fff !important;text-decoration: none'
                href="<?= $this->Url->build(['controller'=>'Companys', 'action'=>'logout']);?>">Add Custommers
            </a>
        </button>
        <button style='background-color: #707070 !important;border: none !important;'>
            <a style='color: #fff !important; text-decoration: none'
                href="<?= $this->Url->build(['controller'=>'Companys', 'action'=>'logout']);?>">List Custommers
            </a>
        </button>
    </div>
</nav>
<div style="margin-top: -30px; ">
    <div style="display: block;">
        <h1 style="margin-left: 12%">Filter Customers</h1>
    </div>
    <div style="width: 500px !important;">
        <div style="display: block;">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary" type="button" style="width: 100px!important;">Sales</button>
                <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                    <option selected>Choose...</option>
                    <option value="1">Thomas</option>
                    <option value="2">Lux</option>
                    <option value="3">Meme</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div style="display: flex;width: 800px;box-sizing: border-box;border: 1px solid #ced4da">

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
            style="margin-top: 21px;margin-left: 10px;">
        <label class="form-check-label" for="flexRadioDefault1"
            style="font-size: 15px;padding-top: 14px;padding-left: 5px;">
            Customers ID
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
            style="margin-top: 21px;margin-left: 10px;">
        <label class="form-check-label" for="flexRadioDefault3"
            style="font-size: 15px;padding-top: 14px;padding-left: 5px;">
            Display name
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
            style="margin-top: 21px;margin-left: 10px;">
        <label class="form-check-label" for="flexRadioDefault4"
            style="font-size: 15px;padding-top: 14px;padding-left: 5px;">
            Phone number
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
            style="margin-top: 21px;margin-left: 10px;">
        <label class="form-check-label" for="flexRadioDefault5"
            style="font-size: 15px;padding-top: 14px;padding-left: 5px;">
            Email
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
            style="margin-top: 21px;margin-left: 10px;">
        <label class="form-check-label" for="flexRadioDefault6"
            style="font-size: 15px;padding-top: 14px;padding-left: 5px;">
            Address
        </label>
    </div>


</div>

<div style="display: flex;width: 600px;box-sizing: border-box; margin-top: 20px;">
    <div class="input-group">
        <div class="form-outline" style="width: 400px">
            <input type="search" id="form1" class="form-control" />
        </div>
        <button type="button" class="btn btn-primary" style="width: 100px;margin-left: 10px;">
            <i class="fas fa-search">Search</i>
        </button>
    </div>
</div>



<div class="customers index content" style="margin-top: 30px">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead style="font-size: 15px">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('avatar_url') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('updated_by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody style="font-size: 13px">
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->id) ?></td>
                    <td><?= h($customer->avatar_url) ?></td>
                    <td><?= h($customer->first_name) ?></td>
                    <td><?= h($customer->last_name) ?></td>
                    <td><?= h($customer->phone_number) ?></td>
                    <td><?= h($customer->email) ?></td>
                    <td><?= h($customer->address) ?></td>
                    <td><?= h($customer->status) ?></td>
                    <td><?= h($customer->created_by) ?></td>
                    <td><?= h($customer->updated) ?></td>
                    <td><?= h($customer->updated_by) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{ page }} of {{ pages }}, showing {{ current }} record(s) out of {{ count }} total')) ?>
        </p>
    </div>
</div>

<button style="background-color: #196ef9;margin-top: 20px;border-radius: 5px;border-color: #196ef9;">
    <a style='color: #fff !important; text-decoration: none'
        href="<?= $this->Url->build(['controller'=>'Companys', 'action'=>'index']);?>">Companys Users</a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
