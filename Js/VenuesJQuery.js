$(document).ready( function() {

    $('.column').hover( function() {
        $(this).find('.title').fadeIn(300);
    }, function() {
        $(this).find('.title').fadeOut(100);
    });
     $('.colVen').hover( function() 
    {
        $(this).find('.colTitle').fadeIn(300);
    }, 
    function() 
    {
        $(this).find('.colTitle').fadeOut(100);
    });
    $(document).ready(function(){
  $(".Box8").hover(function(){
    $("h1").fadeOut(700)
  });
  $(".Box8").hover(function(){
    $("h1").fadeIn(700);
  });  
}); 
  $(document).ready(function(){
  $(".slideshow").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
  $(".slideshow").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
});   
$(document).ready(function(){
  $(".Box8").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
  $(".Box8").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
});
     $(document).ready(function(){
  $(".Box9").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
  $(".Box9").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
});    
$(window).scroll(function(){
$(".slideshow").css("opacity", 1 - $(window).scrollTop() / 600);
}); 
    $(window).scroll(function(){
$(".column").css("opacity", 1 - $(window).scrollTop() / 1700);
});
});
