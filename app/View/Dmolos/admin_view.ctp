<?php
    echo $this->Html->link(
        $this->Html->tag('i', '', array('class' => 'icon-arrow-left')) . " Back",
        array('action' => 'index'),
        array('class' => 'btn btn-small', 'escape' => false)
    );
?>
<div>
	<dl class="dl-horizontal">
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dml Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dmolo['DmlType']['name'], array('controller' => 'dml_types', 'action' => 'view', $dmolo['DmlType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Layout Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dmolo['LayoutType']['name'], array('controller' => 'layout_types', 'action' => 'view', $dmolo['LayoutType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Num'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['person_num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note Detail'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['note_detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Dwg'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_dwg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Quotation'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_quotation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Image'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_image']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
