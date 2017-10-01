<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head><title>ATM Vendor montioring and manangement system
</title>
<!-- bootstrap-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<!-- bootstrap theme-->
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-theme.min.css">
<!-- font awesome-->
<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
<!-- custom css-->
<link rel="stylesheet" type="text/css" href="custom/css/custom.css">
<!--dataTables-->
<link rel="stylesheet" type="text/css" href="assets/plugins/datatables.min.css">
<!--file input-->
<link rel="stylesheet" type="text/css" href="assets/plugins/fileinput/css/fileinput.min.css">
<!-- jquery-->
<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
<!-- jqueryul-->
<link rel="stylesheet" type="text/css" href="assets/jquery-ui/jquery-ui.min.css">
<script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
<!-- bootstrap js-->
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ATM SUPPORT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right" id="navSetting">
        <li id="navDashboard"><a href="index.php">
        <i class="glyphicon glyphicon-list-alt"></i> Dashboard </a></li>
         
          <li class="dropdown" id="navFaultLog">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false"> <i class="glyphicon glyphicon-tasks"></i>Fault Log <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="topNavMyFaultLog"><a href="myfaultlog.php"><i class="glyphicon glyphicon-plus"></i> My Fault Log</a></li>
            <li id="topNavGeneralFaultLog"><a href="generalfaultlog.php"> <i class="glyphicon glyphicon-edit"></i>General Fault Log</a></li>
            <li id="topNavOtherFaults"><a href="otherfaults.php"><i class="glyphicon glyphicon-th-list"></i> Other Faults </a></li>
        
           </ul>
        </li> 
         <li id="navAtmBrand"><a href="atmbrands.php">
        <i class="glyphicon glyphicon-btc"></i> AtmBrand </a></li>
        
        
        <li id="navVendorSla"><a href="vendorsla.php">
        <i class="glyphicon glyphicon-th-list"></i> Vendor SLA </a></li>
        
        
          <li id="navCassetteMgt"><a href="cassettemanagement.php">
        <i class="glyphicon glyphicon-th-list"></i> Cassette Management </a></li>
        
        
         <li id="navQuarterlyPayment"><a href="quarterlypayment.php">
        <i class="glyphicon glyphicon-usd"></i> Quarterly Payment </a></li>
            
        <li id="navAtmFleet"><a href="atmfleet.php">
        <i class="glyphicon glyphicon-cloud"></i> Atm Fleet </a></li>
       

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="topNavSetting"><a href="setting.php"><i class="glyphicon glyphicon-wrench"></i> Setting</a></li>
            <li id="topNavLogout"><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
