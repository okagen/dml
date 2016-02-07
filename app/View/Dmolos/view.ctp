<h3 style="color:#000080;"><?php echo h($dmolo['Dmolo']['name']); ?></h3>
<?php
	if (!is_null($dmolo['Dmolo']['file_image'])):
		$imgName = $dmolo['Dmolo']['file_image'];
	endif;
?>
<div class="container">
	<div class='row'>
		<div class='span3' align='left'>
			<?php
				$imgPath0 = 'thumbnail/' . $imgName . '-thumb-0.jpg';
				echo $this->Html->image( $imgPath0 , array('alt' =>$imgName ));
			?>
		</div>
		<div class='span3' align='center'>
			<?php
				$imgPath1 = 'thumbnail/' . $imgName . '-thumb-1.jpg';
				echo $this->Html->image( $imgPath1 , array('alt' =>$imgName ));
			?>
		</div>
		<div class='span3' align='center'>
			<?php
				$imgPath2 = 'thumbnail/' . $imgName . '-thumb-2.jpg';
				echo $this->Html->image( $imgPath2 , array('alt' =>$imgName ));
			?>
		</div>
		<div class='span3' align='right'>
			<?php
				$imgPath3 = 'thumbnail/' . $imgName . '-thumb-3.jpg';
				echo $this->Html->image( $imgPath3 , array('alt' =>$imgName ));
			?>
		</div>
	</div>
</div>
<br/>
<div class="container">
	<div class='row'>
        <div class='span1' style="height:400px;">
            <h3 class="panel-title" style="color:#808080;">Action</h3>
            <?php
                echo $this->Html->link(
                    $this->Html->tag('i', '', array('class' => 'icon-arrow-left')) . " Back",
                    array('action' => 'index'),
                    array('class' => 'btn btn-small btn-block', 'escape' => false)
                );

            ?>
        </div>

		<div class='span9' style="height:400px; background-color:#FFDBC9;color:#808080;border-radius: 10px;box-shadow: 5px 5px 5px #AAA; ">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Main component</h3>
			</div>
			<div>
				<dl class="dl-horizontal">
					<dt><?php echo __('Name'); ?></dt>
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
					<dt><?php echo __('Number of TopBD'); ?></dt>
					<dd>
						<?php echo h($dmolo['Dmolo']['person_num']); ?>
						&nbsp;
					</dd>
					<dt><?php echo __('Price'); ?> (USD)</dt>
					<dd>
            					<?php
            					echo $this->Number->currency(h($dmolo['Dmolo']['price'], ''));
            					?>
					</dd>
					<dt><?php echo __('Main component'); ?></dt>
					<dd>
						<?php echo $dmolo['Dmolo']['note']; ?>
					<dt><?php echo __(''); ?></dt>
					<dd>
						<?php echo $dmolo['Dmolo']['note_detail']; ?>
					</dd>
				</dl>
			</div>
		</div>
		<div class='span2' style="height:400px;" align="center">
			<h3 class="panel-title" style="color:#808080;">Download</h3>
            <?php
                echo $this->Html->link(
                    $this->Html->tag('i', '', array('class' => 'icon-file icon-white')) . " Quotation",
                    array('action' => 'filedownload', 'quo', $dmolo['Dmolo']['file_quotation'], $dmolo['Dmolo']['id']),
                    array('class' => 'btn btn-primary btn-block', 'escape' => false)
                );
                echo 'PDF file. <br/><br/>';

                echo $this->Html->link(
                    $this->Html->tag('i', '', array('class' => 'icon-picture icon-white')) . " CG Perspective",
                    array('action' => 'filedownload', 'cg', $dmolo['Dmolo']['file_image'], $dmolo['Dmolo']['id']),
                    array('class' => 'btn btn-primary btn-block', 'escape' => false)
                );
                echo '4 JPG files. <br/><br/>';

                echo $this->Html->link(
                    $this->Html->tag('i', '', array('class' => 'icon-download-alt icon-white')) . " 3D model",
                    array('action' => 'filedownload', 'dwg', $dmolo['Dmolo']['file_dwg'], $dmolo['Dmolo']['id']),
                    array('class' => 'btn btn-primary btn-block', 'escape' => false)
                );
                echo 'AutoCAD 2013 DWG file format. <br/><br/>';

            ?>
		</div>
	</div>
</div>


