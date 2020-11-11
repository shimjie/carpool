$(document).ready(function() {

    $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
      e.preventDefault();
      var panelTwo = $('.form-panel.two')[0].scrollHeight;
      $('.form-toggle.registerclosebtn').addClass('visible');
      $('.form-panel.one').addClass('hidden');
      $('.form-panel.two').addClass('active');
      $('.form').animate({
        'height': panelTwo
      }, 200);
    });
  
    $('.form-toggle.registerclosebtn').on('click', function(e) {
      e.preventDefault();
      var panelOne = $('.form-panel.two').height();
      $(this).removeClass('visible');
      $('.form-panel.one').removeClass('hidden');
      $('.form-panel.two').removeClass('active');
      $('.form').animate({
        'height': panelOne
      }, 200);

    });

    $(".form-toggle.loginpageclosebtn").on('click', function(e) {
      $("#login-page").hide();
    });
  });

  $("#login").click(function() {
    var userName = $("#log-username").val();
    var pwd = $("#log-password").val();

    console.log(userName);
    console.log(pwd);
    
    $.ajax({ url: 'controller/accountcontroller/login.php',
            data: {'userName': userName, 'pwd': pwd},
            type: 'post',
            success: function(data) {
              console.log(data);
              location.reload();
            }      
    });
  })

  $("#register").click(function() {
    var userName = $("#reg-username").val();
    var pwd = $("#reg-password").val();
    var cpwd = $("#cpassword").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    
    $.ajax({ url: 'controller/accountcontroller/register.php',
            data: {'userName': userName, 'pwd': pwd, 'phone': phone, 'email': email },
            type: 'post',
            success: function(data) {
              console.log(data);
              //location.reload();
            }      
    });

  })