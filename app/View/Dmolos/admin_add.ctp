<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php
		echo  $this->Html->link(__('List Dmolos'),
			array('action' => 'index'),
			array('class'=>'btn btn-info')
		);
		echo  $this->Html->link(__('List Dml Types'),
			array('controller' => 'dml_types', 'action' => 'index'),
			array('class'=>'btn btn-info')
		);
		echo  $this->Html->link(__('List Layout Types'),
			array('controller' => 'layout_types', 'action' => 'index'),
			array('class'=>'btn btn-info')
		);
	?>
</div>

<div class="dmolos form">
<?php echo $this->Form->create('Dmolo'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Dmolo'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('dml_type_id');
		echo $this->Form->input('layout_type_id');
		echo $this->Form->input('person_num');
		echo $this->Form->input('price');
		echo 'note<br/>';
		echo $this->Form->textarea('note');
		echo '<br/>note_detail<br/>';
		echo $this->Form->textarea('note_detail');
		echo $this->Form->input('file_dwg');
		echo $this->Form->input('file_quotation');
		echo $this->Form->input('file_image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

