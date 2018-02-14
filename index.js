var main = function(){
    var x = 300;
    var y = 700;
    $('.menu-icon').click(function(){
        $('.menu').animate({left: '0px'}, x);
        $('body').animate({left: '240px'}, x);
        $('.menu-icon').toggle(x);
    });
    
    $('.fa-times').click(function(){
        $('.menu').animate({left: '-240px'}, x);
        $('body').animate({left: '0px'}, x);
        $('.menu-icon').toggle(x);
    });
};
$(document).ready(main);
