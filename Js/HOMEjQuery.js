$(document).ready( function() {

    $('.column').hover( function() {
        $(this).find('.title').fadeIn(300);
        $(this).find('.title').animate({width: "21.3%", height: "70%", marginTop: "-33.2%", position: "none"})
        $(this).find('img').animate({width: "85%", height: "70%"})
    }, function() {
        $(this).find('.title').fadeOut(100);
        $(this).find('.title').animate({width: "22%", height: "78.75%", position: "absolute"})
        $(this).find('img').animate({width: "65.4%", height: "53.6%"})
    });
    
    
    $('.colVen').hover( function() {
        $(this).find('.colTitle').fadeIn(300);
        $(this).find('.colTitle').animate({width: "21.3%", height: "70%", marginTop: "-33.2%", position: "none"})
        $(this).find('img').animate({width: "85%", height: "70%"})
    }, function() {
        $(this).find('.colTitle').fadeOut(100);
        $(this).find('.colTitle').animate({width: "22%", height: "78.75%", position: "absolute"})
        $(this).find('img').animate({width: "65.4%", height: "53.6%"})
    });
    
    
    $('.Box1').hover( function() {
        $(this).find('h1').animate({textIndent: "55px"});
    }, function(){
        $(this).find('h1').animate({textIndent: "0px"}); 
    });
    
    
    $('.BoxO').hover( function() {
        $(this).find('h1').animate({textIndent: "35px"});
    }, function(){
        $(this).find('h1').animate({textIndent: "0px"});    
    }) 
    
    $(window).scroll(function(){
        $(".slideShow").css("opacity", 1 - $(window).scrollTop()/950);
    });
        
});
