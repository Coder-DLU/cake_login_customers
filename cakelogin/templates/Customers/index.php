<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid">
    <div class="top-nav" style="margin-left: 0 !important;display:flex;">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cloud Nine Solutions</span> PHP</a>
        </div>
        <div>
            <button><a style='color: #fff !important; text-decoration: none'
                    href="<?= $this->Url->build(['controller'=>'Companys', 'action'=>'logout']);?>">Logout</a></button>
        </div>

    </div>
    <div style="display: block; width: 100%;background-color: black;height: 1px;margin-top: -30px; "></div>
    <nav class="top-nav" style="margin-left: 0 !important;">
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
            <h1>Filter Customers</h1>
        </div>

    </div>

    <!-- form search -->
    <form method="get" accept-charset="utf-8">
        <div style="width: 500px !important;">
            <div style="display: block;">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button"
                        style="width: 100px!important;">Sales</button>
                    <select style="width: 300px;" name="seller_id">
                        <option value="0">Không chọn</option>
                        <?php
                        foreach ($sales as $sale) {
                            echo '<option value="' . $sale->seller_id . '">' . $sale->name . '</option>';
                        }; ?>
                    </select>
                </div>
            </div>
        </div>

        <?php
        $search_column = '1'; 
        if(isset($_GET['search_column']))
        $search_column = $_GET['search_column'];?>
        <div style="display: flex;">
            <label style="padding-right: 20px; font-size:14px">
                <input type="radio" name="search_column" value="1" <?php if ($search_column=='1') echo 'checked'?> />
                <span style="padding-left:5px">Customer ID</span>
            </label>
            <label style="padding-right: 20px; font-size:14px">
                <input type="radio" name="search_column" value="2"
                    <?php if ($search_column=='2') echo 'checked'; else echo ''; ?> /><span
                    style="padding-left:5px">Display Name</span>
            </label>
            <label style="padding-right: 20px; font-size:14px">
                <input type="radio" name="search_column" value="3"
                    <?php if ($search_column=='3') echo 'checked'; else echo '';?> /><span
                    style="padding-left:5px">Phone Number</span>
            </label>
            <label style="padding-right: 20px; font-size:14px">
                <input type="radio" name="search_column" value="4"
                    <?php if ($search_column=='4') echo 'checked'; else echo '';?> /><span
                    style="padding-left:5px">Email</span>
            </label>
            <label style="padding-right: 20px; font-size:14px">
                <input type="radio" name="search_column" value="5"
                    <?php if ($search_column=='5') echo 'checked'; else echo '';?> /><span style="padding-left:5px">
                    Address</span>
            </label>
        </div>
        <div style="display: flex;margin-top: 0px;">
            <input type="text" id="key1" name="key1" class="form-control" style="width: 300px"
                value="<?php if (isset($_GET['key1'])) echo $_GET['key1']; ?>" />
            <button style="margin-left:10px;background-color:blue; border:none" type="submit">Search</button>
        </div>

    </form>

    <div class="customers index content" style='margin-top: 60px;'>
        <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Customers') ?></h3>
        <div class="table-responsive">
            <?php if (count($customers)== 0 && !isset($_GET['search_column']) && !isset($_GET['key']) && !isset($_GET['seller_id'])) {
                echo 'There is no data.';
            }; ?>
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('avatar_url') ?></th>
                        <th><?= $this->Paginator->sort('Display name') ?></th>
                        <th><?= $this->Paginator->sort('phone_number') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('address') ?></th>
                        <th><?= $this->Paginator->sort('seller_id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $this->Number->format($customer->id) ?></td>
                        <td><?= $this->Html->image($customer->avatar_url,['style'=>'width:100px;height:120px']) ?></td>
                        <td><?= h($customer->first_name) ?> <?= h($customer->last_name)?></td>
                        <td><?= h($customer->phone_number) ?></td>
                        <td><?= h($customer->email) ?></td>
                        <td><?= h($customer->address) ?></td>
                        <td><?= $this->Number->format($customer->seller_id) ?></td>
                        <!-- <td><?= $customer->has('sale') ? $this->Html->link($customer->sale->name, ['controller' => 'Sales', 'action' => 'view', $customer->sale->seller_id]) : '' ?></td> -->
                        <td class="actions" style='display: flex;margin-top: 42px;'>
                            <button style="background-color: #1064c2;border: none;border-radius: 5px">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id],['class'=>'white']) ?>
                            </button>
                            <!-- commment dong -->
                            <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>-->

                            <button style="background-color: #1064c2;border: none;border-radius: 5px;margin-left:5px">
                                <?= $this->Html->link(__('Duplicate'), ['action' => 'duplicate', $customer->id], ['confirm' => __('Do you really want to copy {0} {1} ?',$customer->first_name.' '.$customer->last_name, ' '.$customer->id),'class'=>'white']) ?>
                            </button>
                            <button style="background-color: #d23b47;border: none;border-radius: 5px;margin-left:5px">
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0} {1} ?',$customer->first_name.' '.$customer->last_name, ' '.$customer->id),'class'=>'white']) ?>

                            </button>

                            <?= $this->Form->postLink(__('Lock'), ['action' => 'changeStatus', $customer->id], [
                                    'confirm' => __('Do you really want to delete {0} {1}?', $customer->first_name . ' ' . $customer->last_name, $customer->id),
                                    'style' => 'background-color: #d23b47;
                                    width: 100px;
                                    height: 38px;
                                    margin-left: 5px;
                                    color: white;
                                    padding: 10px 5px;
                                    text-align: center;
                                    text-decoration: none;
                                    border-radius: 5px',
                                    'hidden' => !$customer->status
                                ]) ?>

                            <?= $this->Form->postLink(__('Unlock'), ['action' => 'changeStatus', $customer->id], [
                                    'confirm' => __('Do you really want to delete {0} {1}?', $customer->first_name . ' ' . $customer->last_name, $customer->id),
                                    'style' => 'background-color: gray;
                                    width: 100px;
                                    height: 38px;
                                    margin-left: 5px;
                                    color: white;
                                    padding: 10px 5px;
                                    text-align: center;
                                    text-decoration: none;
                                    border-radius: 5px',
                                    'hidden' => $customer->status
                                ]) ?>


                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <div class="paginator" style="font-size: 13px;">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
                <p style="float:left;"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}')) ?></p>
                <p style="float:right"><?= $this->Paginator->counter(__('Showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>

</div>

<button style="background-color: #196ef9;margin-top: 20px;border-radius: 5px;border-color: #196ef9;">
    <a style='color: #fff !important; text-decoration: none'
        href="<?= $this->Url->build(['controller'=>'Companys', 'action'=>'index']);?>">Companys Users</a></button>
<button style="background-color: #196ef9;margin-top: 20px;border-radius: 5px;border-color: #196ef9;">
    <a style='color: #fff !important; text-decoration: none'
        href="<?= $this->Url->build(['controller'=>'Sales', 'action'=>'index']);?>">Sales </a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
