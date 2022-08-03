<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        
        <!-- <?=$this->Form->control('login_id', ['required' => true, 'type'=>'text'])?>
        <?= $this->Form->control('password', ['required' => true]) ?> -->

        <label for="">ID</label>
        <input type="text" name="login_id" required onvalid="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Custom notBlank message')" />
        <label for="">Password</label>
        <input type="password" name="password"  required onvalid="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Custom notBlank message')" />
    </fieldset>
    
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
    
</div>
