<div class="dmolos view">
<h2><?php echo __('Dmolo'); ?></h2>
	<dl>
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
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['note']); ?>
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
		<dt><?php echo __('File Image 0'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_image_0']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Image 1'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_image_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Image 2'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_image_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Image 3'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_image_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Thumbnail 0'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_thumbnail_0']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Thumbnail 1'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_thumbnail_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Thumbnail 2'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_thumbnail_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Thumbnail 3'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['file_thumbnail_3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dmolo'), array('action' => 'edit', $dmolo['Dmolo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dmolo'), array('action' => 'delete', $dmolo['Dmolo']['id']), array(), __('Are you sure you want to delete # %s?', $dmolo['Dmolo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dmolos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dmolo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dml Types'), array('controller' => 'dml_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dml Type'), array('controller' => 'dml_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Layout Types'), array('controller' => 'layout_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout Type'), array('controller' => 'layout_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
