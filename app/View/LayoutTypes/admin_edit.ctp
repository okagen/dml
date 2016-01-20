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

<?php
    echo $this->Html->link(
        $this->Html->tag('i', '', array('class' => 'icon-arrow-left')) . " Cancel",
        array('action' => 'index'),
        array('class' => 'btn btn-small', 'escape' => false)
    );
?>