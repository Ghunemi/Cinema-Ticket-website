$(document).ready( function() {
    
        $('.submitbutton').hover( function() {
        $(this).animate({letterSpacing: "10px"});
    }, function(){
       $(this).animate({letterSpacing: "0px"});
        
    });
    
        
    $('form').toggle( function() {
        $(this).animate({left: "1000px"});     
    });
    $('form').toggle( function() {
            $(this).animate({left: "1000px"});
        
    });
});