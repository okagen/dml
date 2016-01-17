<div class="layoutTypes form">
<?php echo $this->Form->create('LayoutType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Layout Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Layout Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dmolos'), array('controller' => 'dmolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dmolo'), array('controller' => 'dmolos', 'action' => 'add')); ?> </li>
	</ul>
</div>
