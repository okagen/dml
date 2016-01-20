<div class="notifications form">
<?php echo $this->Form->create('Notification'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Notification'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php
    echo $this->Html->link(
        $this->Html->tag('i', '', array('class' => 'icon-arrow-left')) . " Cancel",
        array('action' => 'index'),
        array('class' => 'btn btn-small', 'escape' => false)
    );
?>
