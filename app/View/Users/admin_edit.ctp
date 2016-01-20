
<div class="span10 users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('role',
			array('options' => array('user' => 'User', 'su' => 'Super User', 'admin' => 'Admin'))
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
