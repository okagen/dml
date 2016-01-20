<div class="container">
	<div class="row">
		<div class="span2" style="height:500px; background-color:#EDF7FF;">
			<legend><?php echo __('Actions'); ?></legend>
			<div align="center">
			<?php
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-comment icon-white')) . " New Notification",
				    array('action' => 'add'),
				    array('class' => 'btn btn-small btn-info', 'escape' => false)
				);
			?>
			</div>
		</div>

		<div class="span10 users index">
			<legend><?php echo __('Notifications'); ?></legend>
			<table class="table table-striped table-hover ">
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('title'); ?></th>
					<th><?php echo $this->Paginator->sort('message'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($notifications as $notification): ?>
			<tr>
				<td><?php echo h($notification['Notification']['id']); ?>&nbsp;</td>
				<td><?php echo h($notification['Notification']['title']); ?>&nbsp;</td>
				<td><?php echo h($notification['Notification']['message']); ?>&nbsp;</td>
				<td class="actions">
					<?php
						echo $this->Html->link(
						    $this->Html->tag('i', '', array('class' => 'icon-edit icon-white')) . " Edit",
						    array('action' => 'edit', $notification['Notification']['id']),
						    array('class' => 'btn btn-small btn-warning', 'escape' => false)
						);
		            	echo ('<br/>');
						echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $notification['Notification']['id']), array(), __('Are you sure you want to delete # %s?', $notification['Notification']['id'])
						);
					?>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
		</div>
	</div>
</div>

<div class="pagination" align='right'>
	  <ul>
	    <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
	    <?php echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?>
	    <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
	  </ul>
</div>
<div align='right'>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
</div>

