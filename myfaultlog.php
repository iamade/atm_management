<?php require_once 'includes/header.php'; ?>
<?php require_once 'php_action/fetchMyfault.php'; ?> 

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
   		<button class="btn btn-default" data-toggle="modal" id="addFaultModalBtn" data-target="#addFaultModal" id="addFaultModalBtn">
        <i class="glyphicon glyphicon-plus-sign"></i> Add New Fault </button>
   </div><!-- /div-action -->

   <table class="table" id="manageFaultLogTable">
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

  <div class="modal fade" tabindex="-1" role="dialog" id="addFaultModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"> </i> Add Fault</h4>
      </div>

      <form class="form-horizontal" id="submitFaultForm" action="php_action/createFaultLog.php" method="POST">
      <div class="modal-body">
      
  <div class="form-group"> 
         <label for="terminalId" class="col-sm-3 control-label">Terminal ID</label>
        <div class="col-sm-9">
               <select class="form-control" id="terminalId" name="terminalId">
             <!-- <?php// while();?> -->

            </select> 
      </div>
      <div class="form-group">
        <label for="terminalName" class="col-sm-3 control-label">Terminal Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="terminalName" name="terminalName" placeholder="Terminal Name">
        </div>
  </div>
<div class="form-group">
        <label for="atmBrand" class="col-sm-3 control-label">Atm Brand</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="atmBrand" name="atmBrand" placeholder="Atm Brand">
        </div>
  </div>
  <div class="form-group">
        <label for="vendor" class="col-sm-3 control-label">Vendor</label>
        <div class="col-sm-9">
           <select class="form-control" id="vendor" name="vendor">
              <option value="">~~SELECT~~</option>
              <option value="Onsite">Onsite</option>
              <option value="Offsite">Offsite</option>
            </select> 
        </div>
  </div>

<div class="form-group">
        <label for="natureOfFault" class="col-sm-3 control-label">Nature of fault</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="natureOfFault" name="natureOfFault" placeholder="Nature Of Fault">
        </div>
  </div>
  <div class="form-group">
        <label for="custodianName" class="col-sm-3 control-label">Custodian Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="custodianName" name="custodianName" placeholder="Custodian Name">
        </div>
  </div>

  <div class="form-group">
        <label for="custodianNumber" class="col-sm-3 control-label">Custodian Number</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="custodianNumber" name="custodianNumber" placeholder="Custodian Number">
        </div>
  </div>
  
  <div class="form-group">
        <label for="resolutionPath" class="col-sm-3 control-label">Resolution Path</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="resolutionPath" name="resolutionPath" placeholder="resolution Path">
        </div>
  </div>

  <div class="form-group">
        <label for="dateLogged" class="col-sm-3 control-label">Date Logged</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="dateLogged" name="dateLogged" placeholder="date Logged">
        </div>
  </div>

  <div class="form-group">
        <label for="dateResolved" class="col-sm-3 control-label">Date Resolved</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="dateResolved" name="dateResolved" placeholder="Date Resolved">
        </div>
  </div>

  <div class="form-group">
        <label for="status" class="col-sm-3 control-label">status</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="status" name="status" placeholder="status">
        </div>
  </div>
  <div class="form-group">
        <label for="loggedBy" class="col-sm-3 control-label">Logged By</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="loggedBy" name="loggedBy" placeholder="Logged By">
        </div>
  </div>

  
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Faults</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript" src="custom/js/myfaultlog.js"></script>
<?php require_once 'includes/footer.php'; ?>  