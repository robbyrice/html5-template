<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"  lang=""> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"  lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"  lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">

	<title><?php if(isset($title) echo $title.' | '. config_item('site_name')); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/main.css">
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

	<script src="js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body>
	<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	<header>

	</header>
	<div role="main">
<?php $this->load->view($view.'_view'); ?>
	</div>
	<footer>

	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

	<!-- scripts concatenated and minified via build script -->
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<!-- end scripts -->
</body>
</html>
<?php
/* End of file main.php */
/* Location: ./application/views/templates/main.php */