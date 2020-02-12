$(document).ready(function (){
	$("#PMS").show();
	$("#AGO").hide();
	$("#IK").hide();

	$('#tanksdetails-tankselect').on('change', function (){
		if($(event.target).val() == 'PMSTank'){
			$("#PMS").show();
			$("#AGO").hide();
			$("#IK").hide();


		}else if($(event.target).val() == 'AgoTank'){
			$("#AGO").show();
			$("#PMS").hide();
			$("#IK").hide();

		}else if($(event.target).val() == 'IKTank'){
			$("#IK").show();
			$("#AGO").hide();
			$("#PMS").hide();

		}else{
			$("#PMS").show();
			$("#AGO").show();
			$("#IK").show();
		}
	});
});