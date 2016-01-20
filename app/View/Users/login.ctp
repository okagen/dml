<div class="container">
    <div class='row'>
        <div class='span3'>
        </div>
        <div class="span6 users form" align='center'>
            <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <legend>
                    <h4><?php echo __('Please enter your e-mail and password'); ?></h4>
                </legend>
                <h4 align='left'>e-mail</h4>
                <?php echo $this->Form->input('email',
                                array('label' => false)); ?>
                <h4 align='left'>password</h4>
                <?php echo $this->Form->input('password',
                                array('label' => false)); ?>
            </fieldset>

            <?php echo  $this->Form->end(__('Login'),
                array('class'=>'btn btn-default')
                );
            ?>

            <?php //echo $this->Form->end(__('Login')); ?>
        </div>
        <div class='span3'>
        </div>
    </div>
</div>