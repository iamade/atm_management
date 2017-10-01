var manageAtmFleetTable;

$(document).ready(function() {
// top bar active
$("#navAtmFleet").addClass('active');

//manage brand Table
manageAtmFleetTable = $('#manageAtmFleetTable').DataTable({
'ajax' : 'php_action/fetchTerminal.php',
'order' : []
});
 // submit atm fleet form function

 $("#submitATMTerminalForm").unbind('submit').bind('submit', function(){
 	//remove 
 	$(".text-danger").remove();
 	// remove the form error
 	$(".form-group").removeClass("has-error").removeClass('has-success');

 var terminalId = $("#terminalId").val();
 var terminalName = $("#terminalName").val();
 var branchCode  = $("#branchCode").val();
 var onsite_offsite = $("#onsite_offsite").val();
 var vendor = $("#vendor").val();
 var localIp = $("#localIp").val();
 var custodianName = $("#custodianName").val();

if(terminalId == "") {
	$("#terminalId").after('<p class = "text-danger"> Terminal ID field is required </p>');
	$("#terminalId").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#terminalId").find('.text-danger').remove();
	$("#terminalId").closest('.form-group').addClass('has-success'); 

}

if(terminalName == "") {
	$("#terminalName").after('<p class = "text-danger"> Terminal Name field is required </p>');
	$("#terminalName").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#terminalName").find('.text-danger').remove();
	$("#terminalName").closest('.form-group').addClass('has-success'); 

}

if(branchCode == "") {
	$("#branchCode").after('<p class = "text-danger"> branch Code field is required </p>');
	$("#branchCode").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#branchCode").find('.text-danger').remove();
	$("#branchCode").closest('.form-group').addClass('has-success'); 

}

if(onsite_offsite == "") {
	$("#onsite_offsite").after('<p class = "text-danger"> nsite_offsite field is required </p>');
	$("#onsite_offsite").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#onsite_offsite").find('.text-danger').remove();
	$("#onsite_offsite").closest('.form-group').addClass('has-success'); 

}

if(vendor == "") {
	$("#vendor").after('<p class = "text-danger"> vendor field is required </p>');
	$("#vendor").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#vendor").find('.text-danger').remove();
	$("#vendor").closest('.form-group').addClass('has-success'); 

}

if(localIp == "") {
	$("#localIp").after('<p class = "text-danger"> local Ip field is required </p>');
	$("#localIp").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#localIp").find('.text-danger').remove();
	$("#localIp").closest('.form-group').addClass('has-success'); 

}

if(terminalId && terminalName) {
	var form = $(this);

	//button loading
	$("#createTerminalBtn").button('loading');

	$.ajax({
		url: form.attr('action'),
		type: form.attr('method'),
		data: form.serialize(),
		dataType: 'json',
		success:function(response){
			//button loading
			$("#createTerminalBtn").button('reset');

			if(response.success == true) {
				//reload the manage member table
				manageAtmFleetTable.ajax.reload(null, false);

				// reset the form text
				$("#submitATMTerminalForm")[0].reset();
				// remove the error text
				$(".text-danger").remove();
				//remove the form error
				$(".form-group").removeClass('has-error').removeClass('has-success');

				$("#add-terminal-messages").html('<div class="alert alert-success">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  '<strong> <i class ="glyphicon glyphicon-ok-sign"</strong>'+ response.messages+
					'</div>');

				$(".alert-success").delay(500).show(10, function(){

				 	$(this).delay(3000).hide(10,function(){
				 		$(this).remove();
				 	});
				});	// /.alert
			}	// /if
		}

	});

}


return false;
 });

});

