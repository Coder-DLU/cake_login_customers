<!-- in /templates/Users/login.php -->

<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>

        <?php echo $this->Form->control("login_id",["type"=>"text","required"=>true,"oninvalid"=>"this.setCustomValidity('Please enter the login id')","oninput"=>"this.setCustomValidity('')"]); ?>
        <?php echo $this->Form->control("password",["type"=>"password", "required"=>true,"oninvalid"=>"this.setCustomValidity('Please enter the password')","oninput"=>"this.setCustomValidity('')"]); ?>
        <!-- <label for="">ID</label>
        <input type="text" name="login_id" id="login_id" required placeholder="" oninvalid="this.setCustomValidity('Please enter the login id')" oninput="this.setCustomValidity('')" />
        <label for="">Password</label>
        <input type="password" name="password" id="password" required placeholder="" oninvalid="this.setCustomValidity('Please enter the password')" oninput="this.setCustomValidity('')" /> -->
    </fieldset>
    
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>
    
</div>
