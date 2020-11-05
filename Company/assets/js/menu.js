$(".navbar").load("subpage/common/menu.php");

$( document ).ready(function() {
    $("#login-page").load("subpage/common/loginpage.php");
    $("#login-page").hide();

    $("#loginBut").on('click', function(e) {
        $("#login-page").show();
    });
});

function Logout(){
    $.ajax({ url: 'controller/accountcontroller/logout.php',
            data: {},
            type: 'get',
            success: function(data) {
              location.reload();
            }      
    });
}

