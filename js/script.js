// remap jQuery to $
(function($){

 





 



    })(this.jQuery);



// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
    log.history = log.history || [];   // store logs to an array for reference
    log.history.push(arguments);
    if(this.console){
        console.log( Array.prototype.slice.call(arguments) );
    }
};



// catch all document.write() calls
(function(doc){
    var write = doc.write;
    doc.write = function(q){ 
        log('document.write(): ',arguments); 
        if (/docwriteregexwhitelist/.test(q)) write.apply(doc,arguments);  
    };
})(document);

$( ".thumbnail" ).mouseout( function() {
    $( this ).animate({
        opacity: 1
    }, 200);
});

$( ".thumbnail" ).mouseover( function() {
    $( this ).animate({
        opacity: 0.1
    }, 50);
});

$(document).ready(function() {  
 
    //select all the a tag with name equal to modal
    $('a[name=modal]').click(function(e) {
        //Cancel the link behavior
        e.preventDefault();
       
        //load content
       $('.site_content').load("/welcome/ajax_content/home");
        
        
        //Get the A tag
        var id = $(this).attr('href');
     
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
     
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({
            'width':maskWidth,
            'height':maskHeight
        });
         
        //transition effect     
        $('#mask').fadeIn(300);    
        $('#mask').fadeTo("slow",0.5);  
     
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();
               
        //Set the popup window to center
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2);
     
        //transition effect
        $(id).fadeIn(2000); 
        
       
     
     
     
     
    });
     
    //if close button is clicked
    $('.window .close').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();
        $('#mask, .window').hide();
    });     
     
    //if mask is clicked
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    });         
     
});

