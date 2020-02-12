
$(document).ready(function(){
  
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }

$("#validateDemurragesUpdate").click(function(){
  var NORTendered = $('#NorTendered').val();
  var HosesDisconnected = $('#HoseDisconnected').val();
  var DemmuragesRate = $('#DemurrageRate').val();
  //var NightTimeNor = $('#NightNor').val();
  var NorAllowance = $('#NorAllowance').val();
  var FreeTime = $('#FreeTime').val();
  var shifting = $('#Shifting').val();
  var otherDeductions = $('#OtherDeductions').val();


  //get the difference of dates
  var date1 = parseInt(new Date(NORTendered).getTime()/1000);
  var date2 = parseInt(new Date(HosesDisconnected).getTime()/1000);
  var timeDiff = (date2-date1)/3600;

  var totalShiftingHours=0;

  //get shifing hours
  if(shifting != 0){
     var getShiftingHours = shifting.split(':');
    var hrs = getShiftingHours[0];
    var cHrs = +hrs; //remove leading zeros
    var mins = getShiftingHours[1];
    var cMins = +mins; 

    //calculate total shifting hrs
     totalShiftingHours = (cHrs) + (cMins/60);
 
  }else{
    totalShiftingHours = 0; 
  }


  //get otherdeductions in hrs:mins hours
  var totalotherHours = 0;
  if(otherDeductions != 0){
     var getDeductionHours = otherDeductions.split(':');
    var hrs = getDeductionHours[0];
    var zHrs = +hrs; //remove leading zeros
    var mins = getDeductionHours[1];
    var zMins = +mins; 

    //calculate total shifting hrs
     totalotherHours = (zHrs) + (zMins/60);
 
  }else{
    totalotherHours = 0; 
  }

//calculate the total deductions
  var totalDeduction = (+NorAllowance) + (+FreeTime) + (+totalShiftingHours) +(+totalotherHours);

 //Total Time on Dem
 var totalTimeOnDemurrage = (+timeDiff) - (+totalDeduction);

 //convert to Days
 var totalTimeOnDemurrageinDays = (+totalTimeOnDemurrage)/24;

//calculate demurage
var DemurrageAmount = (+totalTimeOnDemurrageinDays) * (+DemmuragesRate);

  //  alert(timeDiff+"~~Total Deductions~"+totalDeduction );
  //  alert("TotalTimeOnDemmurage~~" + totalTimeOnDemurrage);
  // alert("TotalTimeOnDemmurageDaye~~" + totalTimeOnDemurrageinDays);
  //   alert("You will pay~~" + roundToTwo(DemurrageAmount));

  $('#TotalTimeUsed').val(roundToTwo(timeDiff));
  $('#TotalTimeOnDemurrage').val(roundToTwo(totalTimeOnDemurrage));
  $('#TotalTimeDeduction').val(roundToTwo(totalDeduction));
  $('#DemurrageAmount').val(roundToTwo(DemurrageAmount));
function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}
  
});



});

