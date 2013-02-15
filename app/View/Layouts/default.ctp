<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Welcome To MyBlog');
?>
<!DOCTYPE html> 

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
		<link rel="icon" href="images/favicon.png" type="image/png">
		<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
		<title>Welcome To MyBlog</title>
	
		<?php
	
			echo $this->Html->css(array(
				'bootstrap',
				'ie',
				'prettyPhoto',
				'style'
			));
		
			echo $this->Html->script(array(
				'jquery.min',
				'bootstrap.min',
				'jquery.easing',
				'jquery.quicksand',
				'superfish',
				'hoverIntent',
				'jquery.hoverdir',
				'jquery.flexslider',
				'jflickrfeed.min',
				'jquery.prettyPhoto',
				'jquery.elastislide',
				'jquery.tweet',
				'smoothscroll',
				'jquery.ui',
				'main',
				'ajax-mail',
				'accordion.settings'
			));
		
		?>
		<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link href="css/ie.css" type="text/css" rel="stylesheet"/>
		<![endif]-->
	</head>

	<body>
		<header id="header">
			<div class="container">
				<?php echo $this->element('header_home'); ?>
			</div>
		</header>

			<?php echo $this->element('slider_home'); ?>

			<?php echo $this->fetch('content'); ?>
	
			<?php #echo $this->element('features_home'); ?>
	
			<?php #echo $this->element('pricelist_home'); ?>
	
			<?php echo $this->element('footer_home'); ?>
	
			<?php echo $this->element('sql_dump'); ?>
	</body>
</html>
