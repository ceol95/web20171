<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admin-ElecShop</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/bootstrap.min.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/font-awesome/4.5.0/css/font-awesome.min.css')); ?>" />

		<!-- page specific plugin styles -->
		<?php echo $__env->yieldContent('cssPlugin'); ?>

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/fonts.googleapis.com.css')); ?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/ace.min.css')); ?>" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/ace-skins.min.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('public/back-end/ace-master/assets/css/ace-rtl.min.css')); ?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo e(asset('public/back-end/ace-master/assets/js/ace-extra.min.js')); ?>"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<style type="text/css">
			body{
				font-family: 'Roboto', sans-serif;
			}
		</style>
		<?php echo $__env->yieldContent('css'); ?>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/js/html5shiv.min.js"></script>
		<script src="<?php echo e(asset('')); ?>public/back-end/ace-master/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>