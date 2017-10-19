var manageFaultLogTable;

$(document).ready(function()  {
//active top navbar myFault

$("#topNavMyFaultLog").addClass('active');

manageFaultLogTable = $('#manageFaultLogTable').DataTable({
'ajax' : 'php_action/fetchMyfault.php',
'order': [0,1,2,3,4,5,6,7]


});

//on click on submit fault form modal
$("#addFaultModalBtn").unbind('click').bind('click', function(){

	
	$("#submitFaultForm").unbind('submit').bind('submit', function() {

//remove the form text
	$("#submitFaultForm")[0].reset();
	//remove the error text
	$(".text-danger").remove();
	// remove the form error
	$(".form-group").removeClass('has-error').removeClass('has-success');


		var terminalId = $("#terminalId").val();
		var terminalName = $("#terminalName").val();
		var atmBrand = $("#atmBrand").val();
		var natureOfFault  = $("#natureOfFault").val();
		 var custodianNumber = $("#custodianNumber").val();
		 var vendor = $("#vendor").val();
		 var resolutionPath = $("#resolutionPath").val();
		 var custodianName = $("#custodianName").val();
		 var dateLogged = $("#dateLogged").val();
		 var dateResolved = $("#dateResolved").val();
		 var custodianName = $("#custodianName").val();
		 var status = $("#status").val();
		 var loggedBy = $("#loggedBy").val();
		


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

if(atmBrand == "") {
	$("#atmBrand").after('<p class = "text-danger"> atm Brand field is required </p>');
	$("#atmBrand").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#atmBrand").find('.text-danger').remove();
	$("#atmBrand").closest('.form-group').addClass('has-success'); 

}

if(natureOfFault == "") {
	$("#natureOfFault").after('<p class = "text-danger"> natureOfFault field is required </p>');
	$("#natureOfFault").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#natureOfFault").find('.text-danger').remove();
	$("#natureOfFault").closest('.form-group').addClass('has-success'); 

}

if(vendor == "") {
	$("#vendor").after('<p class = "text-danger"> vendor field is required </p>');
	$("#vendor").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#vendor").find('.text-danger').remove();
	$("#vendor").closest('.form-group').addClass('has-success'); 

}

if(resolutionPath == "") {
	$("#resolutionPath").after('<p class = "text-danger"> resolutionPath field is required </p>');
	$("#resolutionPath").closest('.form-group').addClass('has-error');
} else { 
//remove error text field 
	$("#resolutionPath").find('.text-danger').remove();
	$("#resolutionPath").closest('.form-group').addClass('has-success'); 

}

if(terminalId && terminalName) {
var form = $(this);

$.ajax({
	url: form.attr("action"),
	type: form.attr('method'),
	data: form.serialize(),
	dataType: 'json',
	success: function(response) {
		if(response.success == true) {
			
		}
	}

})

}

		return false; 

	});
});


});