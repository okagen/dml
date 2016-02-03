<!-- お知らせの表示 2016.01.27 Y.Ezaki -->
<?php $this->Html->scriptStart(array('inline' => false)); ?>
    $(document).on('shown.bs.collapse', '.collapse', function(){
        $('a[href="#' + this.id + '"]').find('span.icon-chevron-down')
          .removeClass('icon-chevron-down').addClass('icon-chevron-up');
    });

    $(document).on('hide.bs.collapse', '.collapse', function(){
        $('a[href="#' + this.id + '"]').find('span.icon-chevron-up')
          .removeClass('icon-chevron-up').addClass('icon-chevron-down');
    });
<?php $this->Html->scriptEnd(); ?>
<div class="container"><div class="row">
        <div class='span1' align='center'><h5>News</h5></div>
        <?php $i = 0 ?>
        <?php foreach ($notifications as $notification): ?>
            <?php if($i == 0): ?>
                <!-- 最新のお知らせはアラートに表示する　-->
                <div class='span10' align='left'><div class="alert alert-info" role="alert">
                <?php echo h($notification['Notification']['title']); ?>&nbsp;:&nbsp;<?php echo h($notification['Notification']['message']); ?>
                </div></div>
                <div class='span1' align='center'>
                <h6><a href="#news" class="list-group-item" data-toggle="collapse" data-target="#news"><font color="#000000">more...</f><span class="icon-chevron-down"></span></a></h6>
                </div>
                </div></div>

                <!-- 2件目以降のお知らせはリストで折り畳み表示する　-->
                <div id="news" class="collapse">
                <ul>
            <?php endif; ?>    
            <?php if($i != 0): ?>
                <div class="container"><div class="row">
                <div class='span1' align='center'></div>
                <div class='span10' align='left'>
                <?php echo h($notification['Notification']['title']); ?>&nbsp;:&nbsp;<?php echo h($notification['Notification']['message']); ?>
                </div>
                <div class='span1' align='center'></div>
                </div></div>
    <?php endif ?>
    <?php $i++ ?>
<?php endforeach; ?>
</ul>
<br>
</div>

<!--<div class="container" style="padding:5px; height:30px; background-color:#FFDBC9;color:#808080;border-radius: 5px;box-shadow: 5px 5px 5px #AAA; ">-->
<div class="container" style="padding:5px; height:30px; background-color:#FFDBC9;color:#808080;border-radius: 5px;">
    <div class='row'>
        <?php echo $this->Form->create('Dmolo', array('novalidate' => true)); ?>
        <fieldset>
            <div class='span1' align='center'></div>
            <div class='span3' align='center'>
                <?php echo $this->Form->input('dml_type_id', array('label' => false, 'type' => 'select', 'error'=> false, 'empty' => 'D-MOLO & D-MOLO+')); ?>
            </div>
            <div class='span3' align='center'>
                <?php echo $this->Form->input('layout_type_id', array('label' => false, 'type' => 'select', 'error'=> false, 'empty' => 'In line & Back to Back')); ?>
            </div>
            <div class='span3' align='center'>
                <?php echo $this->Form->input('person_num', array('label' => false, 'type' => 'select', 'error'=> false, 'empty' => 'Surface : all')); ?>
            </div>
            <div class='span2' align='left'>
                <?php
                    echo $this->Form->end(
                        $this->Html->tag('i', '', array('class' => 'icon-search')) . " Filter",
                        array('class' => 'btn btn-small btn-primary', 'escape' => false)
                    );
                ?>
            </div>
        </fieldset>
    </div>
</div>

<div class="container pagination" align='right'>
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
            <!-- 2016.01.27 表示内容を変更 Y.Ezaki -->
            <th><?php echo __('Type'); ?></th>
            <th><?php echo __('Layout'); ?></th>
            <!-- 2016.01.27 表示内容を変更 Y.Ezaki -->
            <th><?php echo __('Top Boards'); ?></th>
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
        <!-- 2016.01.27 表示内容を変更 Y.Ezaki -->
        <td><?php echo h($dmolo['DmlType']['name']); ?>&nbsp;</td>
        <td><?php echo h($dmolo['LayoutType']['name']); ?>&nbsp;</td>
        <!-- 2016.01.27 表示内容を変更 Y.Ezaki -->
        <td><?php echo h($dmolo['Dmolo']['person_num']); ?>&nbsp;</td>
		<td><?php echo h($dmolo['Dmolo']['name']); ?>&nbsp;</td>
		<td><?php echo $dmolo['Dmolo']['note']; ?>&nbsp;</td>
		<td>
            <?php
            echo $this->Number->currency(h($dmolo['Dmolo']['price'], ''));
            ?>
            &nbsp;
            </td>
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