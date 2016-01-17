<div class="layoutTypes form">
<?php echo $this->Form->create('LayoutType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Layout Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LayoutType.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('LayoutType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Layout Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dmolos'), array('controller' => 'dmolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dmolo'), array('controller' => 'dmolos', 'action' => 'add')); ?> </li>
	</ul>
</div>
