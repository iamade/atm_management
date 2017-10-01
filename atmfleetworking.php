<?php require_once 'includes/header.php'; ?>
<!--<?php// require_once 'php_action/fetchTerminal.php'; ?> -->

<?php require_once 'php_action/core.php';?>

<?php

$sql = "SELECT atm_id, terminal_id, terminal_name, branch_code, 
onsite_offsite, vendor_FK, local_ip, custodian_name, default_gateway, 
region FROM atm_database ORDER BY atm_id DESC ";

$result = $connect->query($sql);

?>


<div class="row">
	<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="dashboard.php">Home</a></li>
	 <li class="active">Atm Fleet </li>
	</ol>

	<div class="panel panel-default">
  <div class="panel-heading"> <i class="glyphicon glyphicon-edit"></i>Manage Atm Fleet</div>
  <div class="panel-body">
   <div class="remove-messages"></div>

   <div class="div-action pull pull-right">
   		<button class="btn btn-default" data-toggle="modal" data-target="#addATMModal"><i class="glyphicon glyphicon-plus-sign"></i> Add New Terminal </button>
   </div><!-- /div-action -->

   <table class="table" id="manageAtmFleetTable">
      <thead>
      <tr>
        <th>S/N</th>
        <th>Terminal ID</th>
        <th>Terminal Name</th>
        <th>Branch code</th>
        <th>Site Location</th>
        <th>vendor</th>
        <th>Local IP</th>
        <th>Custodian Name</th>
        <th>Default Gateway</th> 
        <th>Region</th>
      </tr>
    </thead>
    <?php
    while($row = mysqli_fetch_array($result))
    {
      echo '
      <tr>
        <td>'.$row["atm_id"].'</td>
        <td>'.$row["terminal_id"].'</td>
        <td>'.$row["terminal_name"].'</td>
        <td>'.$row["branch_code"].'</td>
        <td>'.$row["onsite_offsite"].'</td>
        <td>'.$row["vendor_FK"].'</td>
        <td>'.$row["local_ip"].'</td>
        <td>'.$row["custodian_name"].'</td>
        <td>'.$row["default_gateway"].'</td>
        <td>'.$row["region"].'</td>

        </tr>
      ';
    }
    ?>
   </table>
  </div>
</div>


	</div><!-- /col-md-12 -->
<div><!-- /row --> 



<div class="modal fade" tabindex="-1" role="dialog" id="addATMModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Terminal</h4>
      </div>

      <form class="form-horizontal" id="submitATMTerminalForm" action="php_action/createTerminal.php" method="POST">

      <div class="modal-body">

        <div id="add-terminal-messages"></div>

      <div class="form-group">
        <label for="terminalId" class="col-sm-3 control-label">Terminal ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="terminalId" name="terminalId" placeholder="Terminal Id" autocomplete ="off">
        </div>
      </div>
      <div class="form-group">
        <label for="terminalName" class="col-sm-3 control-label">Terminal Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="terminalName" name="terminalName" placeholder="Terminal Name">
        </div>
  </div>
<div class="form-group">
        <label for="branchCode" class="col-sm-3 control-label">branch Code</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="branchCode" name="branchCode" placeholder="branch Code">
        </div>
  </div>
  <div class="form-group">
        <label for="onsite_offsite" class="col-sm-3 control-label">Onsite/Offsite</label>
        <div class="col-sm-9">
           <select class="form-control" id="onsite_offsite" name="onsite_offsite">
              <option value="">~~SELECT~~</option>
              <option value="Onsite">Onsite</option>
              <option value="Offsite">Offsite</option>
            </select> 
        </div>
  </div>

<div class="form-group">
        <label for="vendor" class="col-sm-3 control-label">Vendor</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="vendor" name="vendor" placeholder="Vendor">
        </div>
  </div>
  <div class="form-group">
        <label for="localIp" class="col-sm-3 control-label">Local IP</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="localIp" name="localIp" placeholder="Local IP">
        </div>
  </div>

  <div class="form-group">
        <label for="custodianName" class="col-sm-3 control-label">Custodian Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="custodianName" name="custodianName" placeholder="Custodian Name">
        </div>
  </div>
  
  <div class="form-group">
        <label for="defaultGateway" class="col-sm-3 control-label">Default Gateway</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="defaultgateway" name="defaultgateway" placeholder="Default Gateway">
        </div>
  </div>

  <div class="form-group">
        <label for="changesMadeBy" class="col-sm-3 control-label">Region</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="region" name="region" placeholder="Changes Made By">
        </div>
  </div>
  


      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="createTerminalBtn" data-loading-text="Loading...">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" tabindex="-1" role="dialog" id="editATMModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> edit Terminal</h4>
      </div>
      <form class="form-horizontal" id="editATMTerminalForm" action="php_action/editTerminal.php" method="POST">

      <div class="modal-body">
       <div class="form-group">
        <label for="terminalId" class="col-sm-3 control-label">Terminal ID</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="terminalId" name="terminalId" placeholder="Terminal Id" autocomplete ="off">
        </div>
      </div>
      <div class="form-group">
        <label for="terminalName" class="col-sm-3 control-label">Terminal Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="terminalName" placeholder="Terminal Name">
        </div>
  </div>
<div class="form-group">
        <label for="branchCode" class="col-sm-3 control-label">branch Code</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="serial Number" placeholder="branch Code">
        </div>
  </div>
   <div class="form-group">
        <label for="onsite_offsite" class="col-sm-3 control-label">Onsite/Offsite</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="Onsite_Offsite" placeholder="Onsite/Offsite">
        </div>
  </div>

  <div class="form-group">
        <label for="vendor" class="col-sm-3 control-label">Vendor</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="vendor" placeholder="Vendor">
        </div>
  </div>
  <div class="form-group">
        <label for="" class="col-sm-3 control-label">Local IP</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="localIP" placeholder="Local IP">
        </div>
  </div>

  <div class="form-group">
        <label for="" class="col-sm-3 control-label">Custodian Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="custodianName" placeholder="Custodian Name">
        </div>
  </div>
  
  <div class="form-group">
        <label for="" class="col-sm-3 control-label">Default Gateway</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="defaultgateway" placeholder="Default Gateway">
        </div>
  </div>

  <div class="form-group">
        <label for="" class="col-sm-3 control-label">Region</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="region" placeholder="region">
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


<div class="modal fade" tabindex="-1" role="dialog" id="removeATMModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove ATM</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to Delete </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyohicon-remove-sign">Close</button>
        <button type="button" class="btn btn-primary"> <i class="glyphicon glyohicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--<script type="text/javascript" src="custom/js/atmfleet.js"></script>
-->

<script type="text/javascript">
$(document).ready(function()
{
  $('#manageAtmFleetTable').DataTable();

});
</script>

<?php require_once 'includes/footer.php'; ?>  