<div class="dmolos form">
<?php echo $this->Form->create('Dmolo'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Dmolo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('dml_type_id');
		echo $this->Form->input('layout_type_id');
		echo $this->Form->input('person_num');
		echo $this->Form->input('price');
		echo $this->Form->input('note');
		echo $this->Form->input('note_detail');
		echo $this->Form->input('file_dwg');
		echo $this->Form->input('file_quotation');
		echo $this->Form->input('file_image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dmolo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Dmolo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dmolos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dml Types'), array('controller' => 'dml_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dml Type'), array('controller' => 'dml_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Layout Types'), array('controller' => 'layout_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout Type'), array('controller' => 'layout_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
