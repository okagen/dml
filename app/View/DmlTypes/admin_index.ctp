<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php
		echo  $this->Html->link(__('New Dml Type'),
			array('action' => 'add'),
			array('class'=>'btn btn-success')
		);
		echo  $this->Html->link(__('List Dmolos'),
			array('controller' => 'dmolos', 'action' => 'index'),
			array('class'=>'btn btn-info')
		);
	?>
</div>
<div class="dmlTypes index">
	<h2><?php echo __('Dml Types'); ?></h2>
	<table class="table table-striped table-hover ">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dmlTypes as $dmlType): ?>
	<tr>
		<td><?php echo h($dmlType['DmlType']['id']); ?>&nbsp;</td>
		<td><?php echo h($dmlType['DmlType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php
				echo  $this->Html->link(__('Edit'),
					array('action' => 'edit', $dmlType['DmlType']['id']),
					array('class'=>'btn btn-warning')
				);
				echo ('<br/>');
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dmlType['DmlType']['id']), array(), __('Are you sure you want to delete # %s?', $dmlType['DmlType']['id']));
			?>
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

