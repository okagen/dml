<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php
		echo  $this->Html->link(__('List Layout Type'),
			array('action' => 'index'),
			array('class'=>'btn btn-info')
		);
	?>
</div>

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

