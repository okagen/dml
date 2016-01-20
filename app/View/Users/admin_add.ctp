<?php echo $this->Form->create('User'); ?>
<fieldset>
	<legend><?php echo __('Admin Add User'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'User name'));
    echo $this->Form->input('email', array('label' => 'E-mail'));
		echo $this->Form->input('password', array('label' => 'Password'));
		echo $this->Form->input('role',
			array('options' => array('user' => 'User', 'admin' => 'Admin'))
		);
	?>
</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<?php
    echo $this->Html->link(
        $this->Html->tag('i', '', array('class' => 'icon-arrow-left')) . " Cancel",
        array('action' => 'index'),
        array('class' => 'btn btn-small', 'escape' => false)
    );
?>
