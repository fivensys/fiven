<style>
	.quick-actions li {
		background: #F6F6F6; /**/
		border: 1px solid #D5D5D5; /**/
		box-shadow: 0 1px 0 0 #FFFFFF inset, 0 1px 0 rgba(255, 255, 255, 0.4);
		display: inline-block; /**/
		line-height: 18px;  /**/
		margin: 0 10px 10px;
		padding: 0 10px;
		text-align: center;
	}
	.quick-actions li a:hover, .quick-actions li:hover{ background: #fff;}
	.quick-actions li {
		min-width: 175px;
	}
	.quick-actions li {
		padding: 0;
	}
	.quick-actions li a {
		padding: 10px 30px;
	}
	.quick-actions li a {
		display: block;
		color: #666666; font-weight:bold;
		text-shadow: 0 1px 0 #ffffff;
	}
	.quick-actions li a i[class^="icon-"], .quick-actions li a i[class*=" icon-"] {
		background-repeat: no-repeat;
		background-attachment: scroll;
		background-position: 0 0;
		background-color: transparent;
		width: 32px;
		height: 32px;
		display: block;
		margin: 0 auto 5px;
	}
	.quick-actions i.icon-country {
		background-image: url('assets/images/icons/32/country.png');
	}
	.quick-actions i.icon-city {
		background-image: url('assets/images/icons/32/city.png');
	}
	.quick-actions i.icon-customer {
		background-image: url('assets/images/icons/32/customer.png');
	}
	.quick-actions i.icon-supplier {
		background-image: url('assets/images/icons/32/supplier.png');
	}
	.quick-actions i.icon-vendor {
		background-image: url('assets/images/icons/32/vendor.png');
	}
	.quick-actions i.icon-unit {
		background-image: url('assets/images/icons/32/unit.png');
	}
	.quick-actions i.icon-category {
		background-image: url('assets/images/icons/32/category.png');
	}
	.quick-actions i.icon-currency {
		background-image: url('assets/images/icons/32/currency.png');
	}
	.quick-actions i.icon-location {
		background-image: url('assets/images/icons/32/location.png');
	}
	.quick-actions i.icon-product {
		background-image: url('assets/images/icons/32/product.png');
	}
	.quick-actions i.icon-inventory {
		background-image: url('assets/images/icons/32/inventory.png');
	}
	.quick-actions i.icon-logistics {
		background-image: url('assets/images/icons/32/logistics.png');
	}
	.quick-actions i.icon-incoming {
		background-image: url('assets/images/icons/32/incoming.png');
	}
	.quick-actions i.icon-outgoing {
		background-image: url('assets/images/icons/32/outgoing.png');
	}
	.quick-actions i.icon-request {
		background-image: url('assets/images/icons/32/request.png');
	}
	.quick-actions i.icon-purchase {
		background-image: url('assets/images/icons/32/purchase.png');
	}
	.quick-actions i.icon-sales {
		background-image: url('assets/images/icons/32/sales.png');
	}
	.quick-actions i.icon-purchasenote {
		background-image: url('assets/images/icons/32/purchasenote.png');
	}
	.quick-actions i.icon-report {
		background-image: url('assets/images/icons/32/report.png');
	}
</style>

<section class="content-header"><!-- Content Header (Page header) -->
	<h1>Dashboard<small>Control panel</small></h1>
	<ol class="breadcrumb">
		<li><a href="javascript:;"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>
		
<section class="content"><!-- Main content -->
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Master Data</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li><a href="<?php echo site_url() ?>master_country"> <i class="icon-country"></i> Master Country</a></li>
					<li><a href="<?php echo site_url() ?>master_city"> <i class="icon-city"></i> Master City</a></li>
					<li><a href="<?php echo site_url() ?>master_customer"> <i class="icon-customer"></i> Master Customer</a></li>
					<li><a href="<?php echo site_url() ?>master_supplier"> <i class="icon-supplier"></i> Master Supplier</a></li>
					<li><a href="<?php echo site_url() ?>master_vendor"> <i class="icon-vendor"></i> Master Vendor</a></li>
					<li><a href="<?php echo site_url() ?>master_unit"> <i class="icon-unit"></i> Master Unit</a></li>
					<li><a href="<?php echo site_url() ?>master_category"> <i class="icon-category"></i> Master Category</a></li>
					<li><a href="<?php echo site_url() ?>master_currency"> <i class="icon-currency"></i> Master Currency</a></li>
					<li><a href="<?php echo site_url() ?>master_location"> <i class="icon-location"></i> Master Location</a></li>
					<li><a href="<?php echo site_url() ?>master_product"> <i class="icon-product"></i> Master Product</a></li>
				</ul>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Inventory</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li><a href="<?php echo site_url() ?>inventory_control"> <i class="icon-inventory"></i> Inventory Control</a></li>
					<li><a href="<?php echo site_url() ?>logistics"> <i class="icon-logistics"></i> Logistics</a></li>
					<li><a href="<?php echo site_url() ?>incoming_control"> <i class="icon-incoming"></i> Incoming Control</a></li>
					<li><a href="<?php echo site_url() ?>outgoing_control"> <i class="icon-outgoing"></i> Outgoing Control</a></li>
				</ul>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Purchase</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li><a href="<?php echo site_url() ?>request_order"> <i class="icon-request"></i> Request Order</a></li>
					<li><a href="<?php echo site_url() ?>/purchase_order"> <i class="icon-purchase"></i> Purchase Order</a></li>
				</ul>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Sales</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li><a href="<?php echo site_url() ?>sales_order"> <i class="icon-sales"></i> Sales Order</a></li>
				</ul>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Finance</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li><a href="<?php echo site_url() ?>purchase_notes"> <i class="icon-purchasenote"></i> Purchase Notes</a></li>
				</ul>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
	
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Report</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li><a href="<?php echo site_url() ?>purchase_notes_list"> <i class="icon-report"></i> PO Nota [List]</a></li>
					<li><a href="<?php echo site_url() ?>purchase_order_list"> <i class="icon-report"></i> PO [List]</a></li>
					<li><a href="<?php echo site_url() ?>sales_order_list"> <i class="icon-report"></i> Sales Order [List]</a></li>
				</ul>
			</div>
		</div><!-- /.box-body -->
	</div><!-- /.box -->
</section><!-- /.content -->