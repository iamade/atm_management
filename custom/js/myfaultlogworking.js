var manageFaultLogTable;

// $(document).ready(function(){  
//            $.datepicker.setDefaults({  
//                 dateFormat: 'yy-mm-dd'   
//            });  
//            $(function(){  
//                 $("#dateLogged").datepicker();  
//                 $("#dateResolved").datepicker();  
//            });  
// });
$(document).ready(function()  {
//active top navbar myFault

$("#topNavMyFaultLog").addClass('active');
$(document).ready(function()
{
  $('#manageFaultLogTable').DataTable();

});

$(document).ready(function()
{
  $('#terminalId').change(function(){

  	var terminalId = $(this).val();

  	$.ajax({
  		url: "loadfaultyterminaldata.php",
  		method:"POST",
  		data:{terminalId:terminalId},
  	    dataType:'json',
  		success:function(data){
  			$('#terminalName').val(data[0]);
  			$('#atmBrand').val(data[1]);
  			$('#vendor').val(data[2]);
  			$('#custodianName').val(data[3]);
  			$('#custodianNumber').val(data[4]);
  		//	$('#loggedBy').val(data[]);
  			$('#terminalFK').val(data[5]);


  		}
  	})

  })

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
		var terminalName = $("#terminalName").val(data[0]);
		var atmBrand = $("#atmBrand").val(data[1]);
		var natureOfFault  = $("#natureOfFault").val();
		 var custodianNumber = $("#custodianNumber").val();
		 var vendor = $("#vendor").val(data[2]);
		 var resolutionPath = $("#resolutionPath").val();
		 var custodianName = $("#custodianName").val(data[3]);
		 var dateLogged = $("#dateLogged").val();
		 var dateResolved = $("#dateResolved").val();
		 var custodianNumber = $("#custodianNumber").val(data[4]);
		 var status = $("#status").val();
		 var loggedBy = $("#loggedBy").val(data[5]);
		 var markedResolvedBy = $("#markedResolvedBy").val();
		 var reOpenedBy = $("#reOpenedBy").val();
		 var changesMadeBy = $("#changesMadeBy").val();
			


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


if(terminalId && terminalName) {
var form = $(this);

//button loading
$("#createTerminalBtn").buton('loading');

$.ajax({
	url: form.attr('action'),
	type: form.attr('method'),
	data: form.serialize(),
	dataType: 'json',
	success: function(response) {
		//button loading
		$("#createTerminalBtn").button('reset');

		if(response.success == true){
			// reload the manage fault Table 
			manageFaultLogTable.ajax.reload(null, false);

			//reset the form text
			 $("#submitFaultForm")[0].reset();
			 //remove the error text
			 $(".text-danger").remove();
			 //remove the form error
			 $(".form-group").removeClass('has-error').removeClass('has-success');

			 $("#add-brand-messages").html('<div class="alert alert-success">'+
				  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
				  '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong>'+ response.messages +
				'</div>');

			  $(".alert-success").delay(500).show(10, function(){
			  		$(this).delay(3000).hide(10, function(){
			  			$(this).remove();
			  		});
			  });// alert
		}// if
 	}

})

}

		return false; 

	});
});


});