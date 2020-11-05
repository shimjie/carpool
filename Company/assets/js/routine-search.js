$(document).ready(function() {
    

    $('.nav__cont').hover(function(){
        $(".search-content").removeClass('invisible');

        $('.nav__cont').animate({
            'width': '30%',
            'height': '40%'
          }, 200);
    },
        function(){
            $(".search-content").addClass('invisible');
            $('.nav__cont').animate({
                'width': '60px',
                'height': '100px'
            }, 200);
        }
    )
});