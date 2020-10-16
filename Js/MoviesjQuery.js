$(document).ready( function() {

    $('.column').hover( function() {
        $(this).find('.title').fadeIn(200);
    }, function() {
        $(this).find('.title').fadeOut(100);
});
    
    $('.CN').hover( function() {
        $(this).find('h1').animate({textIndent: "35px"});

    }, function(){
        $(this).find('h1').animate({textIndent: "0px"});    
    }) 
    
});

$(document).ready(function(){
  $(".CN").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
  $(".CN").toggle(function(){
    $("h1").animate({left: "+=1000px"});
  });
});