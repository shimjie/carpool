$(document).ready(function() {
    $('#driverApply').on('click', function(e) {
      e.preventDefault();
      ApplyShow(0);
      $("#apply-page").show();
    });
  
    $('#passagerApply').on('click', function(e) {
        e.preventDefault();
        ApplyShow(1);
        $("#apply-page").show();
    });

    $(".form-toggle.applypageclosebtn").on('click', function(e) {
      $("#apply-page").hide();
    });
  });


function ApplyShow(tabValue){
    if(tabValue == 0){
        $('#driver-apply').show();
        $('#passager-apply').hide();
    }
    else{
        $('#passager-apply').show();
        $('#driver-apply').hide();
    }
}