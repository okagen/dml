<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	</style>
	<?php echo $this->Html->css('bootstrap-responsive.min'); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

	<div class="row">
		<div class="span9" style="height:10px; color:#808080";>
			<h4>
			<?php echo  $this->Html->link(__('D-MOLO and D-MOLO Plus sample catalog'),
					array('controller' => 'Dmolos', 'action' => 'index')
				);
			?>
			</h4>
		</div>
		<?php
			//Users/login画面以外では、権限、ユーザ名、logoutを表示する。
			if(stristr(Router::url(), 'login') === false){
				echo '<div class="span3" align="right">';
				echo '<h5>';
				if($role === 'admin') {
					echo '<font color="#ff9933">';
					echo $role;
					echo ':::</font>';
				}
				echo $username;
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
				echo  $this->Html->link(__('logout'),
					array('controller' => 'Users', 'action' => 'logout')
				);
				echo ('</h5>');
				echo ('</div>');
			}
		?>
	</div>
	<?php
		if($role === 'admin'){
			echo '<div class="row" style="font-size:medium;">';
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-home')) . " Home",
				    array('controller' => 'Dmolos', 'action' => 'index', 'admin' => false),
				    array('class' => 'btn btn-small', 'escape' => false)
				);
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-list')) . " DmlTypes",
				    array('controller' => 'DmlTypes', 'action' => 'index', 'admin' => true),
				    array('class' => 'btn btn-small', 'escape' => false)
				);
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-list')) . " LayoutTypes",
				    array('controller' => 'LayoutTypes', 'action' => 'index', 'admin' => true),
				    array('class' => 'btn btn-small', 'escape' => false)
				);
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-list')) . " Dmolos",
				    array('controller' => 'Dmolos', 'action' => 'index', 'admin' => true),
				    array('class' => 'btn btn-small', 'escape' => false)
				);
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-comment')) . " Notifications",
				    array('controller' => 'Notifications', 'action' => 'index', 'admin' => true),
				    array('class' => 'btn btn-small', 'escape' => false)
				);
				echo $this->Html->link(
				    $this->Html->tag('i', '', array('class' => 'icon-user')) . " Users",
				    array('controller' => 'Users', 'action' => 'index', 'admin' => true),
				    array('class' => 'btn btn-small', 'escape' => false)
				);
			echo '</div>';
		}
	?>
<!--
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><?php //echo __('D-MOLO and D-MOLO Plus sample catalog'); ?></a>

				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
-->
			</div>
		</div>
	</div>

<br/>

	<div class="container">
		<?php echo $this->Session->flash(); ?>


		<?php echo $this->fetch('content'); ?>
	</div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
