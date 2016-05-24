<?php 
	echo link_tag("assets/css/table_custom.css");
	echo link_tag("assets/css/hover.css");
	echo link_tag("assets/css/notice.css");
?>

<div class="content" ng-app="finVen">

<div ng-controller="masterCtrl">
	<div class="row">
		<div ng-hide="mHeadView">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-dashboard"></i><a href="javascript:;" ng-click="mTableShow()"> List {{objText}}</a></li>
					<li class="active"><i class="fa fa-edit"></i> {{viewHeadText}} {{objText}}</li>
				</ol>
			</div>
		</div>
		
		<div class="col-md-6" ng-hide="mView">
			<div class="panel panel-primary">
				<div class="panel-heading">{{viewText}}</div>
				<div class="panel-body">	
					<div class="notice notice-danger notice-sm">
						<strong>{{objText}} Name : </strong><label class="textBold">{{Value.category_name}}</label>
					</div>
				</div>
				<div class="panel-footer">
					<button type="button" class="btn btn-default" ng-click="mTableShow()"><span class="fa fa-undo fa-lg"></span> {{cancelText}}</button>
					<a href="javascript:;" ng-click="editData(data)" tooltip-placement="top" tooltip="{{editText}}">					
						<button type="button" class="btn btn-warning"><span class="fa fa-edit fa-lg"></span> {{editText}}</button>
					</a>
				</div>
			</div>
		</div>
		
		<div class="col-md-6" ng-hide="mForm">
			<div class="panel panel-primary">
				<div class="panel-heading">{{viewHeadText}}</div>
				<div class="panel-body">
					<form name="masterForm" novalidate>
						<input type="text" class="hide-input" ng-model="Value.category_id" />

						<div ng-class="{'has-error': masterForm.category_name.$invalid}">
							<div class="form-group">
								<label>{{objText}} Name</label>
								<input type="text" name="category_name" class="form-control" style="text-transform:uppercase" required ng-model="Value.category_name" />
							</div>
							<span class="help-block" style="margin-top:-15px;" ng-show="masterForm.category_name.$invalid">{{objText}} Name is required</span>
						</div>
					</form>
				</div>
				<div class="panel-footer">
					<button type="button" class="btn btn-default" ng-click="mTableShow()"><span class="fa fa-undo fa-lg"></span> {{cancelText}}</button>
					<button type="button" class="btn btn-success" ng-click="savData(currentPage)"
						ng-disabled="masterForm.$dirty && masterForm.$invalid || masterForm.$pristine && masterForm.$invalid">			
						<span class="fa fa-save fa-lg"></span> {{viewButtonText}}
					</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div ng-hide="mHeadTable">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-dashboard"></i> List {{objText}}</li>
				</ol>
			</div>
		</div>
		
		<div class="col-md-12" ng-hide="mTable">
			<div class="table-responsive">
			<table class="table table-bordered" ng-init="getData()">
			<thead class="head1">
				<th class="act">Act</th>
				<th>{{objText}} Name&nbsp;<a ng-click="sort_by('category_name');" tooltip-placement="top" tooltip="{{sortText}}">
					<i class="glyphicon glyphicon-sort"></i></a>
				</th>
				<th>Create User&nbsp;<a ng-click="sort_by('create_user');" tooltip-placement="top" tooltip="{{sortText}}">
					<i class="glyphicon glyphicon-sort"></i></a>
				</th>
				<th>Update User&nbsp;<a ng-click="sort_by('update_user');" tooltip-placement="top" tooltip="{{sortText}}">
					<i class="glyphicon glyphicon-sort"></i></a>
				</th>
			</thead>
			<thead class="head2">
				<th>
					<button type="button" class="btn btn-warning btn-sm" ng-click="clearDataMaster()" tooltip-placement="right" tooltip="{{addText}}">
						<span class="fa fa-plus fa-lg"></span> ADD
					</button>
				</th>
				<th><input type="text" class="form-control form-control-search" style="text-transform:uppercase" 
					ng-model="search.category_name" ng-change="filter()" tooltip-placement="top" tooltip="Filter {{objText}} Name" />
				</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				<tr ng-repeat="data in filtered = (list | filter:search | orderBy:predicate:reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" 
					class="point" ng-class="{selec:data.category_id == idSelected}" ng-click="setSelected(data.category_id)">					
					<td>
						<a href="javascript:;" class="viewBtn" ng-click="viewData(data)" tooltip-placement="left" tooltip="{{viewText}}">							
							<span class="fa fa-list fa-lg"></span>
						</a>
						<a href="javascript:;" class="editBtn" ng-click="editData(data)" tooltip-placement="top" tooltip="{{editText}}">							
							<span class="fa fa-pencil-square-o fa-lg"></span>
						</a>
						<a href="javascript:;" class="remBtn" ng-click="remData(data.category_id)" tooltip-placement="right" tooltip="{{deleteText}}">
							<span class="fa fa-trash-o fa-lg"></span>
						</a>
					</td>
					<td>{{data.category_name}}</td>
					<td>{{data.create_user}}</td>
					<td>{{data.update_user}}</td>
				</tr>
				<tr class="head2 tr-footer">
					<td colspan="4">
					<div class="col-md-4">
						<pagination ng-model="currentPage" total-items="filteredItems" max-size="maxSize" items-per-page="entryLimit" 
							boundary-links="true" rotate="false" class="pagination-sm" previous-text="&laquo;" next-text="&raquo;">
						</pagination>
					</div>
					<div class="col-md-1">
						<select class="form-control" ng-model="entryLimit">
							<option>5</option>
							<option>10</option>
							<option>20</option>
							<option>50</option>
							<option>100</option>
						</select>
					</div>
					<div class="col-md-4">
						<h5> Data filtered {{filtered.length}} of {{totalItems}} total {{objText}}</h5>
					</div>
					<div class="col-md-3" ng-show="filteredItems == 0">
						<h5> No {{objText}} found </h5>
					</div>
					</td>
				</tr>
			</tbody>
			</table>
			</div>
		</div>
	</div>
</div>

</div>
	
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular-animate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/ui-bootstrap-tpls-0.13.4.min.js"></script>
<script type="text/javascript">
'use strict';

var app = angular.module('finVen',['ngAnimate','ui.bootstrap']);

app.filter('startFrom',function() {
	return function(input,start) {
		if (input) {
			start = +start;
			return input.slice(start);
		}
		return [];
	}
})

app.controller('masterCtrl',function($scope,$http,$timeout,$interval) {
	$scope.mTableShow = function() {
		$scope.mHeadView = true;
		$scope.mForm = true;
		$scope.mView = true;
		$scope.mTable = false;
		$scope.mHeadTable = false;
	};
	
	$scope.mViewShow = function() {
		$scope.mHeadView = false;
		$scope.mForm = true;
		$scope.mView = false;
		$scope.mTable = true;
		$scope.mHeadTable = true;
	};
	
	$scope.mFormShow = function() {
		$scope.mHeadView = false;
		$scope.mForm = false;
		$scope.mView = true;
		$scope.mTable = true;
		$scope.mHeadTable = true;
	};
	
	$scope.objText = 'Category';
	$scope.viewText = 'View';
	$scope.addText = 'Add';
	$scope.editText = 'Edit';
	$scope.deleteText = 'Delete';
	$scope.cancelText = 'Cancel';
	$scope.saveText = 'Save';
	$scope.updateText = 'Update';
	$scope.sortText = 'Sort';
	$scope.addAct = 'add';
	$scope.editAct = 'edit';
	$scope.mTableShow();
	
	$scope.idSelected = null;
	$scope.setSelected = function(idSelected) {
		localStorage.idSelected = $scope.idSelected = idSelected || localStorage.idSelected || null;
	};
	
	$scope.clearDataMaster = function() {
		$scope.Value = {
			category_id: '',
			category_name: ''
		};
		
		$scope.act = $scope.addAct;
		$scope.viewHeadText = $scope.addText;
		$scope.viewButtonText = $scope.saveText;
		$scope.mFormShow();
	};
	
	$scope.setPage = function() {
		$scope.currentPage = 1;
		$scope.entryLimit = 5;
		$scope.filteredItems = $scope.list.length;
		$scope.totalItems = $scope.list.length;
		$scope.maxSize = 5;
	};
	
	$interval(function() {
		$scope.getterData();
	},5000);
	
	$scope.getData = function() {
		$http({
			method:'get',
			url:'<?php echo $category_get.$userid ?>/v/<?php echo $prest ?>',
			headers:{'<?php echo $kname ?>':'<?php echo $k ?>'}
		})
			.success(function(result) {
				$scope.list = result;
				$scope.setPage();
			});
	};
	
	$scope.getterData = function() {
		$http({
			method:'get',
			url:'<?php echo $category_get.$userid ?>/v/<?php echo $prest ?>',
			headers:{'<?php echo $kname ?>':'<?php echo $k ?>'}
		})
			.success(function(result) {
				$scope.list = result;
			});
	};
	
	$scope.getDatas = function(currentPage) {
		$http({
			method:'get',
			url:'<?php echo $category_get.$userid ?>/v/<?php echo $prest ?>',
			headers:{'<?php echo $kname ?>':'<?php echo $k ?>'}
		})
			.success(function(result) {
				$scope.list = result;
				$scope.setPage();
				$scope.currentPage = currentPage;
			});
	};
	
	$scope.viewData = function(data) {
		$scope.idGet = data.category_id;
		$scope.Value = data;
		$scope.viewHeadText = $scope.editText;
		$scope.viewButtonText = $scope.updateText;
		$scope.act = $scope.editAct;
		$scope.mViewShow();
	};
	
	$scope.editData = function(data) {
		$scope.mFormShow();
		$scope.idGet = data.category_id;
		$scope.Value = data;
		$scope.viewHeadText = $scope.editText;
		$scope.viewButtonText = $scope.updateText;
		$scope.act = $scope.editAct;
	};
	
	$scope.savData = function(currentPage) {
		switch($scope.act) {
			case $scope.addAct:
				$scope.addData();
			break;
			
			case $scope.editAct:
				$scope.upData(currentPage);
			break;
		}
	};
	
	$scope.addData = function() {
		$http({
		  method:'post',
		  url:'<?php echo $category_add.$userid ?>/v/<?php echo $prest ?>/branch/<?php echo $branchid ?>/user/<?php echo $user ?>',
		  headers:{'<?php echo $kname ?>':'<?php echo $k ?>'},
		  data:$scope.Value
		})
			.success(function(data) {
				$.alert({confirmButton:'OK',title:'Information',content:data});
				$scope.act = $scope.addAct;
				$scope.getData();
				$scope.mTableShow();
			})
			
			.error(function() {
				$.alert({confirmButton:'OK',title:'Information',content:'Failed...'});
			});
	};
	
	$scope.upData = function(currentPage) {
		$http({
		  method:'post',
		  url:'<?php echo $category_edit.$userid ?>/v/<?php echo $prest ?>/branch/<?php echo $branchid ?>/user/<?php echo $user ?>/ids/'+$scope.idGet,
		  headers:{'<?php echo $kname ?>':'<?php echo $k ?>'},
		  data:$scope.Value
		})
			.success(function(data) {
				$.alert({confirmButton:'OK',title:'Information',content:data});
				$scope.act = $scope.addAct;
				$scope.getDatas(currentPage);
				$scope.mTableShow();
			})
			
			.error(function() {
				$.alert({confirmButton:'OK',title:'Information',content:'Failed...'});
			});
	};
	
	$scope.remData = function(id) {
		$.confirm({
			title: 'Attention',
			content: 'Are you sure want to delete data?',
			confirmButton: 'OK',
			confirmButtonClass: 'btn-primary',
			cancelButtonClass: 'btn-danger',
			icon: 'fa fa-info',
			animation: 'rotateY',
			theme: 'supervan',
			
			confirm: function() {
				$http({
				  method:'post',
				  url:'<?php echo $category_del.$userid ?>/v/<?php echo $prest ?>/ids/'+id,
				  headers:{'<?php echo $kname ?>':'<?php echo $k ?>'}
				})
					.success(function(data) {
						$.alert({confirmButton:'OK',title:'Information',content:data});
						$scope.getData();
					})
			
					.error(function() {
						$.alert({confirmButton:'OK',title:'Information',content:'Failed...'});
					});
			},
			
			cancel: function() {
				$.alert({confirmButton:'OK',title:'Information',content:'Canceled...'});
			}
		});
	};
    
	$scope.filter = function() {
		$timeout(function() { 
			$scope.filteredItems = $scope.filtered.length;
		},10);
	};
    
	$scope.sort_by = function(predicate) {
		$scope.predicate = predicate;
		$scope.reverse = !$scope.reverse;
	};
});
</script>