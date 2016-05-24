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
		
	<title>Fiven Register</title>
		
	<?php 
	echo link_tag("assets/css/bootstrap/bootstrap.min.css");
	echo link_tag("assets/css/login/reg.css");
	echo link_tag("assets/css/jval/screen.css");
	?>
	
	<style>
	@font-face {
		font-family: 'PT Sans';
		font-style: normal;
		font-weight: 400;
		src: local('PT Sans'), local('PTSans-Regular'), url(<?php echo base_url(); ?>assets/css/font/ptsans/ATKpv8nLYAKUYexo8iqqrg.woff2) format('woff2');
	}
	@font-face {
		font-family: 'PT Sans';
		font-style: normal;
		font-weight: 700;
		src: local('PT Sans Bold'), local('PTSans-Bold'), url(<?php echo base_url(); ?>assets/css/font/ptsans/0XxGQsSc1g4rdRdjJKZrNPk_vArhqVIZ0nv9q090hN8.woff2) format('woff2');
	}
	@font-face {
		font-family: 'Oleo Script';
		font-style: normal;
		font-weight: 400;
		src: local('Oleo Script'), local('OleoScript-Regular'), url(<?php echo base_url(); ?>assets/css/font/oleoscript/_weQNDK6Uf40CiGFKBBUjo4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
	}
	@font-face {
		font-family: 'Oleo Script';
		font-style: normal;
		font-weight: 700;
		src: local('Oleo Script Bold'), local('OleoScript-Bold'), url(<?php echo base_url(); ?>assets/css/font/oleoscript/hudNQFKFl98JdNnlo363folIZu-HDpmDIZMigmsroc4.woff2) format('woff2');
	}
	
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
</head>
<body>

<?php
	echo $this->session->flashdata("err_mail");
	echo $this->session->flashdata("res_reg");
	echo $this->session->flashdata("treg");
	echo validation_errors();
?>

<div class="header">
	<div class="container">
		<div class="row">
			<div class="logo span4">
				<h1><a href="">Fiven Registration</a></h1>
			</div>
		</div>
	</div>
</div>

<div class="register-container container">
	<div class="row">
		<form id="registForm" method="post" action="<?php echo site_url() ?>regist/creg">
		<input type="hidden" name="tkreg" class="form-control" value="<?php echo $this->session->userdata("TkReg") ?>" required>
		<div class="register col-md-6">
			<div class="form">
				<h2>REGISTER TO <span class="red"><strong>FIVEN</strong></span></h2>
				<div class="form-group">
				Key Person
				<input type="text" name="name" class="form-control" style="text-transform:uppercase" required />
				</div>
				<div class="form-group">
				Email
				<input type="email" name="email" class="form-control" required />
				</div>
				<div class="form-group">
				Password
				<input type="password" name="pwd" id="pwd" class="form-control" required />
				</div>
				<div class="form-group">
				Password Confirmation
				<input type="password" name="pwdc" class="form-control" required />
				</div>
				<div class="line-break"></div>
			</div>
		</div>
		
		<div class="register col-md-6">
			<div class="form">	
				<div class="form-group">
				Company Name
				<input type="text" name="branch_name" class="form-control" style="text-transform:uppercase" required />
				</div>
				<div class="form-group">
				Address
				<input type="text" name="branch_address" class="form-control" style="text-transform:uppercase" required />
				</div>
				<div class="form-group">
				Phone
				<input type="text" name="phone" class="form-control" required />
				</div>
				<div class="form-group">
				Fax
				<input type="text" name="fax" class="form-control" />
				</div>
				<div class="cap">
					<?php echo $this->recaptcha->render(); ?>
				</div>
				
				<button type="submit" class="btn btn-success">Save</button>
				<button type="button" id="back" class="btn btn-danger">Back</button>
				
			</div>
		</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jval/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/backstretch/jquery.backstretch.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://getbootstrap.com/assets/js/bootstrap/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript">
$().ready(function() {
	$.backstretch([
      "<?php echo base_url(); ?>assets/images/backgrounds/1.jpg",
	  "<?php echo base_url(); ?>assets/images/backgrounds/2.jpg",
	  "<?php echo base_url(); ?>assets/images/backgrounds/3.jpg"
    ],{duration:3000,fade:750});
	
	$('#registForm').validate({
		rules: {
			email: {
				email: true
			},
			pwdc: {
				equalTo: '#pwd'
			}
		},
		messages: {
			name: {
				required: 'Please provide a Key Person'
			},
			email: {
				required: 'Please provide a Email'
			},
			pwd: {
				required: 'Please provide a Password'
			},
			pwdc: {
				required: 'Please provide a Password Confirmation'
			},
			branch_name: {
				required: 'Please provide a Company'
			},
			branch_address: {
				required: 'Please provide a Address'
			},
			phone: {
				required: 'Please provide a Phone'
			}
		}
	});
	
	$('#back').click(function(){
		window.location.href = '<?php echo site_url() ?>login';
	});
});
</script>

</body>
</html>