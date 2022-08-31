$(function() {

    //change the classes
    var btn = $(".scroll__hide");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > 600) {
            btn.removeClass('scroll__hide').addClass("show");
        } else {

            if(scroll < 600){
                btn.removeClass("show").addClass('scroll__hide');
            }
            
        }

    });

//scroll to top
    $("button").click(function() {
        $('html,body').animate({
            scrollTop: $(".header-profile").offset().top},
            'slow');
    });

});
//end of scroll function