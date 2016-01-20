<div class="dmlTypes form">
<?php echo $this->Form->create('DmlType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Dml Type'); ?></legend>
	<?php
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