function ProfileAccess(){
    var perName = $("#pro-name").val();
    var phone = $("#pro-phone").val();
    var email = $("#pro-email").val();


    $.ajax({ url: 'controller/profilecontroller/profile_access.php',
            data: {'perName': perName, 'phone': phone, 'email': email},
            type: 'post',
            success: function(data) {
                console.log(data);
            }
    });
}

function PwdAccess(){
    var newPwd = $("#newPwd").val();
    var cNewPwd = $("#cNewPwd").val();


    $.ajax({ url: 'controller/profilecontroller/pwd_access.php',
            data: {'pwd': newPwd},
            type: 'post',
            success: function(data) {
                console.log(data);
            }
    });
}