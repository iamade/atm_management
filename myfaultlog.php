<?php require_once 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="dashboard.php">Home</a></li>
	 <li class="active">My fault log </li>
	</ol>

	<div class="panel panel-default">
  <div class="panel-heading"> <i class="glyphicon glyphicon-edit"></i>Manage My Fault Log</div>
  <div class="panel-body">
   <div class="remove-messages"></div>

   <div class="div-action pull pull-right" style="padding-bottom:20px;">
   		<button class="btn btn-default"><i class="glyphicon glyphicon-plus-sign"></i> Add New Fault </button>
   </div><!-- /div-action -->

   <table class="table" id="manageFaultLogTable" style="width:100%";>
   	<thead>
   		<tr>
   			<th>S/N</th>
   			<th>Terminal Name</th>
   			<th>Terminal ID</th>
   			<th>atm brand</th>
   			<th>vendor</th>
   			<th>Nature Of Fault</th>
   			<th>Custodian Name</th>
   			<th>resolution Path</th>
   			<th>Date Logged</th>
   			<th>Status</th>
   			<th>Logged by</th>
   			<th>Status</th>
   			<th>Marked Resolved by</th>
   			<th>Re-Opened by</th>
   			<th>Changes Made By</th>
   		</tr>
   	</thead>	

   </table>
  </div>
</div>


	</div><!-- /col-md-12 -->
<div><!-- /row --> 
<?php require_once 'includes/footer.php'; ?>  