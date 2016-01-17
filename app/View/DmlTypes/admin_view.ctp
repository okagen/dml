<div class="dmlTypes view">
<h2><?php echo __('Dml Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dmlType['DmlType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dmlType['DmlType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dml Type'), array('action' => 'edit', $dmlType['DmlType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dml Type'), array('action' => 'delete', $dmlType['DmlType']['id']), array(), __('Are you sure you want to delete # %s?', $dmlType['DmlType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dml Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dml Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dmolos'), array('controller' => 'dmolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dmolo'), array('controller' => 'dmolos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dmolos'); ?></h3>
	<?php if (!empty($dmlType['Dmolo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Dml Type Id'); ?></th>
		<th><?php echo __('Layout Type Id'); ?></th>
		<th><?php echo __('Person Num'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('File Dwg'); ?></th>
		<th><?php echo __('File Quotation'); ?></th>
		<th><?php echo __('File Image 0'); ?></th>
		<th><?php echo __('File Image 1'); ?></th>
		<th><?php echo __('File Image 2'); ?></th>
		<th><?php echo __('File Image 3'); ?></th>
		<th><?php echo __('File Thumbnail 0'); ?></th>
		<th><?php echo __('File Thumbnail 1'); ?></th>
		<th><?php echo __('File Thumbnail 2'); ?></th>
		<th><?php echo __('File Thumbnail 3'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dmlType['Dmolo'] as $dmolo): ?>
		<tr>
			<td><?php echo $dmolo['id']; ?></td>
			<td><?php echo $dmolo['name']; ?></td>
			<td><?php echo $dmolo['dml_type_id']; ?></td>
			<td><?php echo $dmolo['layout_type_id']; ?></td>
			<td><?php echo $dmolo['person_num']; ?></td>
			<td><?php echo $dmolo['note']; ?></td>
			<td><?php echo $dmolo['file_dwg']; ?></td>
			<td><?php echo $dmolo['file_quotation']; ?></td>
			<td><?php echo $dmolo['file_image_0']; ?></td>
			<td><?php echo $dmolo['file_image_1']; ?></td>
			<td><?php echo $dmolo['file_image_2']; ?></td>
			<td><?php echo $dmolo['file_image_3']; ?></td>
			<td><?php echo $dmolo['file_thumbnail_0']; ?></td>
			<td><?php echo $dmolo['file_thumbnail_1']; ?></td>
			<td><?php echo $dmolo['file_thumbnail_2']; ?></td>
			<td><?php echo $dmolo['file_thumbnail_3']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dmolos', 'action' => 'view', $dmolo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dmolos', 'action' => 'edit', $dmolo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dmolos', 'action' => 'delete', $dmolo['id']), array(), __('Are you sure you want to delete # %s?', $dmolo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dmolo'), array('controller' => 'dmolos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
