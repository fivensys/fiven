<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title><?php echo $title; ?></title>

	<?php 
	echo link_tag('assets/css/bootstrap/bootstrap.min.css');
	echo link_tag('assets/css/bootstrap/bootstrap-select.min.css');
	echo link_tag('assets/css/font-awesome/css/font-awesome.min.css');
	echo link_tag("assets/css/alert/jquery-confirm.css");
	echo link_tag("assets/css/lte/AdminLTE.min.css");
	echo link_tag("assets/css/lte/skins/_all-skins.min.css");
	?>
	<style>
	.bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn){width:100%;}
	.bootstrap-select {/*width: 220px\9; IE8 and below*/
		width:100%\0; /*IE9 and below*/
	}
	.bootstrap-select.btn-group:not(.input-group-btn) {margin-bottom:0px;}
	</style>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-ie7.css" rel="stylesheet">
	<![endif]-->
	<!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
</head>
