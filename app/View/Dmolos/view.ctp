<div class="dmolos view">
<h2><?php echo $dmolo['DmlType']['name']; ?></h2>
<h3><?php echo h($dmolo['Dmolo']['name']); ?></h3>
	<?php
		if (!is_null($dmolo['Dmolo']['file_image'])):
			$imgName = $dmolo['Dmolo']['file_image'];
			$imgPath0 = 'thumbnail/' . $imgName . '-thumb-0.jpg';
			$imgPath1 = 'thumbnail/' . $imgName . '-thumb-1.jpg';
			$imgPath2 = 'thumbnail/' . $imgName . '-thumb-2.jpg';
			$imgPath3 = 'thumbnail/' . $imgName . '-thumb-3.jpg';
			echo $this->Html->image( $imgPath0 , array('alt' =>$imgName ));
			echo '&nbsp';
			echo $this->Html->image( $imgPath1 , array('alt' =>$imgName ));
			echo '<br>';
			echo $this->Html->image( $imgPath2 , array('alt' =>$imgName ));
			echo '&nbsp';
			echo $this->Html->image( $imgPath3 , array('alt' =>$imgName ));
		endif;
	?>
	<dl>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $dmolo['DmlType']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Layout Type'); ?></dt>
		<dd>
			<?php echo $dmolo['LayoutType']['name']; ?>
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
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($dmolo['Dmolo']['note_detail']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('Edit Dmolo'), array('action' => 'edit', $dmolo['Dmolo']['id'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Dmolo'), array('action' => 'delete', $dmolo['Dmolo']['id']), array(), __('Are you sure you want to delete # %s?', $dmolo['Dmolo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Back to the list'), array('action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Dmolo'), array('action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Dml Types'), array('controller' => 'dml_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Dml Type'), array('controller' => 'dml_types', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Layout Types'), array('controller' => 'layout_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Layout Type'), array('controller' => 'layout_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
