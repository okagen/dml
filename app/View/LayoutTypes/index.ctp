<div class="layoutTypes index">
	<h2><?php echo __('Layout Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($layoutTypes as $layoutType): ?>
	<tr>
		<td><?php echo h($layoutType['LayoutType']['id']); ?>&nbsp;</td>
		<td><?php echo h($layoutType['LayoutType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $layoutType['LayoutType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $layoutType['LayoutType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $layoutType['LayoutType']['id']), array(), __('Are you sure you want to delete # %s?', $layoutType['LayoutType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Layout Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dmolos'), array('controller' => 'dmolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dmolo'), array('controller' => 'dmolos', 'action' => 'add')); ?> </li>
	</ul>
</div>
