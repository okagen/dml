<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php
		echo  $this->Html->link(__('New Dmolo'),
			array('action' => 'add'),
			array('class'=>'btn btn-success')
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

<div class="dmolos index">
	<table class="table table-striped table-hover ">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('dml_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('layout_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_num'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th>
				<?php echo $this->Paginator->sort('note'); ?><br/>
				<?php echo $this->Paginator->sort('note_detail'); ?>
			</th>
			<th>
				<?php echo $this->Paginator->sort('file_dwg'); ?><br/>
				<?php echo $this->Paginator->sort('file_quotation'); ?><br/>
				<?php echo $this->Paginator->sort('file_image'); ?>
			</th>

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
		<td><?php echo h($dmolo['Dmolo']['price']); ?>&nbsp;</td>
		<td>
			<font color='#3366ff'>
				<?php echo $dmolo['Dmolo']['note']; ?>
			</font>
			<font color='#ff9933'>
				<?php echo $dmolo['Dmolo']['note_detail']; ?>
			</font>
		</td>
		<td>
			<font color='#3366ff'>
				<?php echo h($dmolo['Dmolo']['file_dwg']); ?>&nbsp;
			</font><br/>
			<font color='#ff9933'>
				<?php echo h($dmolo['Dmolo']['file_quotation']); ?>&nbsp;
			</font><br/>
			<font color='#339933'>
				<?php echo h($dmolo['Dmolo']['file_image']); ?>&nbsp;
			</font>
		</td>
		<td class="actions">
		<?php
			echo  $this->Html->link(__('View'),
				array('action' => 'view', $dmolo['Dmolo']['id']),
				array('class'=>'btn btn-primary')
			);
			echo ('<br/>');
			echo  $this->Html->link(__('Edit'),
				array('action' => 'edit', $dmolo['Dmolo']['id']),
				array('class'=>'btn btn-warning')
			);

			echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dmolo['Dmolo']['id']), array(), __('Are you sure you want to delete # %s?', $dmolo['Dmolo']['id']));
		?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
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
</div>


