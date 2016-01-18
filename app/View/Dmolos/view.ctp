<h4 style="color:#000080;"><?php echo h($dmolo['Dmolo']['name']); ?></h4>
<div style="float:left; width:250px;">
	<?php
		if (!is_null($dmolo['Dmolo']['file_image'])):
			$imgName = $dmolo['Dmolo']['file_image'];
			$imgPath0 = 'thumbnail/' . $imgName . '-thumb-0.jpg';
			$imgPath1 = 'thumbnail/' . $imgName . '-thumb-1.jpg';
			$imgPath2 = 'thumbnail/' . $imgName . '-thumb-2.jpg';
			$imgPath3 = 'thumbnail/' . $imgName . '-thumb-3.jpg';
			echo $this->Html->image( $imgPath0 , array('alt' =>$imgName ));
			echo '<br/>';
			echo $this->Html->image( $imgPath1 , array('alt' =>$imgName ));
			echo '<br/>';
			echo $this->Html->image( $imgPath2 , array('alt' =>$imgName ));
			echo '<br/>';
			echo $this->Html->image( $imgPath3 , array('alt' =>$imgName ));
		endif;
	?>
</div>

<div style="float:left; width:700px; height:500px; background-color:#FFDBC9;color:#808080; ">
	<div class="panel-heading">
		<h3 class="panel-title" align="center">Configuration details</h3>
	</div>
	<div>
		<dl class="dl-horizontal">
			<dt><?php echo __('Item'); ?></dt>
			<dd>
				<?php echo h($dmolo['Dmolo']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Type'); ?></dt>
			<dd>
				<?php echo h($dmolo['DmlType']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Layout Type'); ?></dt>
			<dd>
				<?php echo h($dmolo['LayoutType']['name']); ?>
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
			<dt><?php echo __('Summary'); ?></dt>
			<dd>
				<?php echo $dmolo['Dmolo']['note']; ?>
			<dt><?php echo __(''); ?></dt>
			<dd>
				<?php echo $dmolo['Dmolo']['note_detail']; ?>
			</dd>
		</dl>
	</div>
</div>

<div style="float:left; width:700px; height:100px;" align="center">
	<h3 class="panel-title" style="color:#808080;">Download</h3>
	<button type="button" class="btn btn-primary btn-lg">Quotation (Excel file)</button>
	<button type="button" class="btn btn-primary btn-lg">CG Perspective (JPEG file)</button>
	<button type="button" class="btn btn-primary btn-lg">3D model (DWG file)</button>
</div>

<div style="clear : both; padding-top : 10px">
	<?php echo  $this->Html->link(__('<<< Back to the list'),
		array('action' => 'index'),
		array('class'=>'btn btn-info')
		);
	?>
</div>
