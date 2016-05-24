<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
		
	<title>Member Login</title>
	
	<style>body{background:url(<?php echo base_url()?>/assets/images/one_way.jpg)}</style>
	
	<?php
		echo link_tag("assets/css/bootstrap/bootstrap.min.css");
		echo link_tag("assets/css/jval/screen.css");
		echo link_tag("assets/css/login/customize.css");
	?>
		
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<!--[if lt IE 8]>
       	<link href="<?php echo base_url(); ?>assets/css/bootstrap-ie7.css" rel="stylesheet">
	<![endif]-->
	<!--[if lt IE 9]>
   		<script src="<?php echo base_url(); ?>assets/js/bootstrap/html5shiv.js"></script>
   		<script src="<?php echo base_url(); ?>assets/js/bootstrap/respond.min.js"></script>
   	<![endif]-->
</head>
<body>

<?php
	echo $this->session->flashdata("wlic");
	echo $this->session->flashdata("wuser");
	echo $this->session->flashdata("wpass");
	echo $this->session->flashdata("wactiv");
	echo $this->session->flashdata("tlogin");
	echo validation_errors();
?>

<div class="container">
	<div class="row vertical-offset-20">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">                                
					<img src="<?php echo base_url() ?>/assets/images/fiven.png" class="img-responsive" alt="fiven"/>
				</div>
				<div class="panel-body">
					<form id="commentForm" method="post" action="<?php echo site_url() ?>login/clog" class="form-signin">
						<label class="panel-login"><div class="login_result"></div></label>
						<input type="hidden" name="tklogin" class="form-control" value="<?php echo $this->session->userdata("TkLogin") ?>" required>
						<input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
						
						<div class="cap form-group">
							<?php echo $this->recaptcha->render(); ?>
						</div>
						<div class="line-break"></div>
						
						<button type="submit" class="btn btn-md btn-danger">Sign in</button>
						<button type="button" id="regist" class="btn btn-md btn-primary">Register</button>
						<div class="checkbox">
							<a href="<?php echo site_url() ?>forgot">Forgot Your Password?</a>
						</div>
					</form>
				</div>
			</div>
			<div class="linkd">
				<center>Copyright &copy; by <a href="https://fiven.web.id">fiven</a> on <a href="https://fiven.web.id/free/license.pdf" target="_blank">freeware</a> using</center>
				<center><a href="https://fiven.web.id/free/assets/guide_to_set.pdf" target="_blank">Registration & Setup Guidance</a></center>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jval/jquery.validate.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript">
$().ready(function() {
	$('#commentForm').validate({
		rules: {
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			}
		},
		messages: {
			email: {
				required: 'Please provide a email'
			},
			password: {
				required: 'Please provide a password'
			}
		}
	});
	
	$('#regist').click(function(){
		window.location.href = '<?php echo site_url() ?>regist';
	});
});
</script>

</body>
</html>