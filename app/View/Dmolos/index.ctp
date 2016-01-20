<div class="pagination" align='right'>
  <ul>
    <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
    <?php echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?>
    <?php echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
  </ul>
</div>

<table class="table table-striped table-hover ">
	<thead>
	<tr>
			<th>Image</th>
			<th><?php echo __('Name'); ?></th>
			<th><?php echo __('Summary'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo __(''); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dmolos as $dmolo): ?>
	<tr>
		<td>
			<?php
			if (!is_null($dmolo['Dmolo']['file_image'])):
				$imgName = $dmolo['Dmolo']['file_image'];
				$imgPath = 'thumbnail/' . $imgName . '-thumb-1.jpg';
				echo $this->Html->image( $imgPath , array('alt' =>$imgName ));
			endif;
			?>
		</td>
		<td><?php echo h($dmolo['Dmolo']['name']); ?>&nbsp;</td>
		<td><?php echo $dmolo['Dmolo']['note']; ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['price']); ?>&nbsp;</td>
		<td>
            <?php
                echo $this->Html->link(
                    $this->Html->tag('i', '', array('class' => 'icon-circle-arrow-right icon-white')) . " Detail",
                    array('action' => 'view', $dmolo['Dmolo']['id']),
                    array('class' => 'btn btn-small btn-info', 'escape' => false)
                );
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