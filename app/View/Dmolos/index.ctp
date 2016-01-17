<div class="dmolos index">
	<h2><?php echo __('Dmolos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('dml_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('layout_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_num'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('file_dwg'); ?></th>
			<th><?php echo $this->Paginator->sort('file_quotation'); ?></th>
			<th><?php echo $this->Paginator->sort('file_image_0'); ?></th>
			<th><?php echo $this->Paginator->sort('file_image_1'); ?></th>
			<th><?php echo $this->Paginator->sort('file_image_2'); ?></th>
			<th><?php echo $this->Paginator->sort('file_image_3'); ?></th>
			<th><?php echo $this->Paginator->sort('file_thumbnail_0'); ?></th>
			<th><?php echo $this->Paginator->sort('file_thumbnail_1'); ?></th>
			<th><?php echo $this->Paginator->sort('file_thumbnail_2'); ?></th>
			<th><?php echo $this->Paginator->sort('file_thumbnail_3'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dmolos as $dmolo): ?>
	<tr>
		<td><?php echo h($dmolo['Dmolo']['id']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dmolo['DmlType']['name'], array('controller' => 'dml_types', 'action' => 'view', $dmolo['DmlType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dmolo['LayoutType']['name'], array('controller' => 'layout_types', 'action' => 'view', $dmolo['LayoutType']['id'])); ?>
		</td>
		<td><?php echo h($dmolo['Dmolo']['person_num']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['note']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_dwg']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_quotation']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_image_0']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_image_1']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_image_2']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_image_3']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_thumbnail_0']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_thumbnail_1']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_thumbnail_2']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['file_thumbnail_3']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dmolo['Dmolo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dmolo['Dmolo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dmolo['Dmolo']['id']), array(), __('Are you sure you want to delete # %s?', $dmolo['Dmolo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dmolo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dml Types'), array('controller' => 'dml_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dml Type'), array('controller' => 'dml_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Layout Types'), array('controller' => 'layout_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Layout Type'), array('controller' => 'layout_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
