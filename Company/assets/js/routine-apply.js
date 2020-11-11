$(document).ready(function() {
    $("#match_result_page").hide();
    

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

    $(".form-toggle.match_page_close").on('click', function(e) {
        $("#match_result_page").hide();
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

var type;
var from_area;
var to_area;
var start_date;
var return_date;
var vaild_date;
var psg_num;
var description;

function MatchResultShow(butType){
    $("#match_result_page").show();
    $("#col-lg-16 #entries #match_list").html("");

    if(butType == 0){
        type = $('input[name="driver_options"]:checked').val();
        from_area = $("#driver_from_area").val();
        to_area = $("#driver_to_area").val();
        start_date = $("#driver_depart_time").val();
        return_date = $("#driver_return_time").val();
        vaild_date = $("#driver_request_vaild_time").val();
        psg_num = $("#driver_num_passager").val();
        description = $("#driver_description").val();
    }
    else{
        type = $('input[name="passager_options"]:checked').val();
        from_area = $("#passager_from_area").val();
        to_area = $("#passager_to_area").val();
        start_date = $("#passager_depart_time").val();
        return_date = $("#passager_return_time").val();
        vaild_date = $("#passager_request_vaild_time").val();
        psg_num = $("#passager_num_passager").val();
        description = $("#passager_description").val();
    }

    
    var match_resultLost;

    $.ajax({ url: 'controller/routinecontroller/routine_match_load.php',
            data: {'processType': butType, 'type': type, 'from_area': from_area, 'to_area': to_area, 
                    'start_date': start_date, 'to_area': to_area, 'start_date': start_date, 'return_date': return_date,
                    'vaild_date': vaild_date, 'psg_num': psg_num, 'description': description},
            type: 'post',
            success: function(data) {
                match_resultLost = data;
                $("#match_page_content").html(data);
            }      
    });
}

function PostRoutineRequest(){
    $.ajax({ url: 'controller/routinecontroller/routine_request_post.php',
            data: {'processType': butType, 'type': type, 'from_area': from_area, 'to_area': to_area, 
                    'start_date': start_date, 'to_area': to_area, 'start_date': start_date, 'return_date': return_date,
                    'vaild_date': vaild_date, 'psg_num': psg_num, 'description': description},
            type: 'post',
            success: function(data) {
                match_resultLost = data;
                $("#match_page_content").html(data);
            }      
    });
}

$("#driver_from_region").change(function() {
    if($("#driver_from_region").val() != 0){
        $("#driver_from_area").prop( "disabled", false );
        console.log($("#driver_from_region").val());
        $("#driver_from_area option").each(function(){
            console.log($(this).attr('id'));
            if($("#driver_from_region").val() == $(this).attr('id')){
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    }
    else{
        $("#driver_from_area").val(0);
        $("#driver_from_area").prop( "disabled", true );
    }
});

$("#driver_to_region").change(function() {
    if($("#driver_to_region").val() != 0){
        $("#driver_to_area").prop( "disabled", false );
        console.log($("#driver_to_region").val());
        $("#driver_to_area option").each(function(){
            console.log($(this).attr('id'));
            if($("#driver_to_region").val() == $(this).attr('id')){
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    }
    else{
        $("#driver_to_area").val(0);
        $("#driver_to_area").prop( "disabled", true );
    }
});

$("#passager_from_region").change(function() {
    if($("#passager_from_region").val() != 0){
        $("#passager_from_area").prop( "disabled", false );
        console.log($("#passager_from_region").val());
        $("#passager_from_area option").each(function(){
            console.log($(this).attr('id'));
            if($("#passager_from_region").val() == $(this).attr('id')){
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    }
    else{
        $("#passager_from_area").val(0);
        $("#passager_from_area").prop( "disabled", true );
    }
});

$("#passager_from_region").change(function() {
    if($("#passager_from_region").val() != 0){
        $("#passager_to_area").prop( "disabled", false );
        console.log($("#passager_from_region").val());
        $("#passager_to_area option").each(function(){
            console.log($(this).attr('id'));
            if($("#passager_from_region").val() == $(this).attr('id')){
                $(this).show();
            }
            else{
                $(this).hide();
            }
        });
    }
    else{
        $("#passager_to_area").val(0);
        $("#passager_to_area").prop( "disabled", true );
    }
});


