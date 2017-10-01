var manageFaultLogTable;

$(document).ready(function()  {
//active top navbar myFault

$("#topNavMyFaultLog").addClass('active');

manageFaultLogTable = $('#manageFaultLogTable').DataTable({
'ajax' : 'php_action/fetchMyfault.php',
'order': []


});

//on click on submit fault form modal
$("#addFaultModalBtn").unbind('click').bind('click', function(){
	
});


});