<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
	<?php echo css('assets/stylesheets/screen.css') ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<?php echo js('assets/js/s.js') ?>
	
	<?php echo js('assets/js/prettify.js') ?>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
	<?php echo css('assets/stylesheets/prettify.css') ?>
</head>
<body>
<div id="header">
	<div id="header-container">
		<h1><a href="/">Sunset Theme</a></h1>
		<?php snippet('menu')?>
		<div class="cf"></div>
	</div>
</div>