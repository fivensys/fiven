<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo base_url(); ?>" class="logo"><span class="logo-lg">FIVEN</span></a>
			<nav class="navbar navbar-static-top" role="navigation"><!-- Header Navbar: style can be found in header.less -->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
					<span class="sr-only">Toggle navigation</span>
				</a>
				
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user-dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-search"></i> Preview<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo site_url() ?>purchase_notes_list"><i class="fa fa-file"></i> PO Nota [LIST]</a></li>
								<li><a href="<?php echo site_url() ?>purchase_order_list"><i class="fa fa-file"></i> PO [LIST]</a></li>
								<li><a href="<?php echo site_url() ?>sales_order_list"><i class="fa fa-file"></i> Sales Order [LIST]</a></li>
							</ul>
						</li>
						
						<li class="dropdown user user-menu"><!-- User Account: style can be found in dropdown.less -->
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/images/icons/handy-icon_08_bw.png" class="user-image" alt="User Image">
								<span class="hidden-xs">User</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header"><!-- User image -->
									<img src="assets/images/icons/handy-icon_08_bw.png" class="img-circle" alt="User Image">
									<p><?php echo $this->session->userdata("iSysName"); ?></p>
								</li><!-- End User image -->
								<li class="user-body"><!-- Menu Body -->
									<div class="col-xs-2 text-center">
										<!--<a href="javascript:;"></a>-->
									</div>
									<div class="col-xs-8 text-center">
										<a href="<?php echo site_url() ?>profile">Profile</a>
									</div>
									<div class="col-xs-2 text-center">
										<!--<a href="javascript:;"></a>-->
									</div>
								</li><!-- End Menu Body -->
								<li class="user-footer"><!-- Menu Footer-->
									<div class="pull-left">
										<a href="<?php echo site_url() ?>change" class="btn btn-default btn-flat">Change Password</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo site_url() ?>login/logout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li><!-- End Menu Footer-->
							</ul>
						</li><!-- End User Account: style can be found in dropdown.less -->
					</ul>
				</div>
			</nav>
		</header>
		
		<aside class="main-sidebar"><!-- Left side column. contains the logo and sidebar -->
			<section class="sidebar"> <!-- sidebar: style can be found in sidebar.less -->
				<div class="user-panel"><!-- Sidebar user panel -->
					<div class="pull-left image">
						<img src="assets/images/icons/handy-icon_08_bw.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $this->session->userdata("iSysName"); ?></p>
						<a href="javascript:;"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<ul class="sidebar-menu"><!-- sidebar menu: : style can be found in sidebar.less -->
					<li class="header"></li>
					<li class="active treeview">
						<a href="<?php echo base_url(); ?>">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						</a>
					</li>
					<li class="header"></li>
					<li class="treeview">
						<a href="javascript:;">
							<i class="fa fa-folder-open"></i> <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url() ?>master_country"><i class="fa fa-tag"></i> Countries</a></li>
							<li><a href="<?php echo site_url() ?>master_city"><i class="fa fa-tag"></i> Cities</a></li>
							<li><a href="<?php echo site_url() ?>master_customer"><i class="fa fa-tag"></i> Customers</a></li>
							<li><a href="<?php echo site_url() ?>master_supplier"><i class="fa fa-tag"></i> Supplier</a></li>
							<li><a href="<?php echo site_url() ?>master_vendor"><i class="fa fa-tag"></i> Vendor</a></li>
							<li><a href="<?php echo site_url() ?>master_unit"><i class="fa fa-tag"></i> Units</a></li>
							<li><a href="<?php echo site_url() ?>master_category"><i class="fa fa-tag"></i> Categories</a></li>
							<li><a href="<?php echo site_url() ?>master_currency"><i class="fa fa-tag"></i> Currencies</a></li>
							<li><a href="<?php echo site_url() ?>master_location"><i class="fa fa-tag"></i> Location</a></li>
							<li><a href="<?php echo site_url() ?>master_product"><i class="fa fa-tag"></i> Products</a></li>
						</ul>
					</li>
					<li class="header"></li>
					<li class="treeview">
						<a href="javascript:;">
							<i class="fa fa-folder-open"></i> <span>Inventory</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url() ?>inventory_control"><i class="fa fa-tag"></i> Inventory Control</a></li>
							<li><a href="<?php echo site_url() ?>logistics"><i class="fa fa-tag"></i> Logistics</a></li>
							<li>
								<a href="javascript:;"><i class="fa fa-tag"></i> Moving Control <i class="fa fa-angle-left pull-right"></i></a>
								<ul class="treeview-menu">
									<li><a href="<?php echo site_url() ?>incoming_control"><i class="fa fa-circle-o"></i> Incoming Control</a></li>
									<li><a href="<?php echo site_url() ?>outgoing_control"><i class="fa fa-circle-o"></i> Outgoing Control</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="header"></li>
					<li class="treeview">
						<a href="javascript:;">
							<i class="fa fa-folder-open"></i> <span>Purchase</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url() ?>request_order"><i class="fa fa-tag"></i> Request Order</a></li>
							<li><a href="<?php echo site_url() ?>purchase_order"><i class="fa fa-tag"></i> Purchase Order</a></li>
						</ul>
					</li>
					<li class="header"></li>
					<li class="treeview">
						<a href="javascript:;">
							<i class="fa fa-folder-open"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url() ?>sales_order"><i class="fa fa-tag"></i> Sales Order</a></li>
						</ul>
					</li>
					<li class="header"></li>
					<li class="treeview">
						<a href="javascript:;">
							<i class="fa fa-folder-open"></i> <span>Finance</span> <i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url() ?>purchase_notes"><i class="fa fa-tag"></i> Purchase Notes</a></li>
						</ul>
					</li>
				</ul>
			</section>
		</aside><!-- /.sidebar -->
		
		<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->