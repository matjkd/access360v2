
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




 
 
 

 
//some things
$(function() {
    
    $('.wymeditor').wymeditor({
         stylesheet: '/css/wym.css'
    });
   
    $( "#datepicker" ).datepicker();
             
});


$(document).ready(function() {
    
    $("#newsimage img[rel]").overlay({
          
        
        });
    

    
});

$(function() {

    // if the function argument is given to overlay,
    // it is assumed to be the onBeforeLoad event listener
    $("a[rel]").overlay({

        mask: 'dark',
        effect: 'apple',

        onBeforeLoad: function() {

            // grab wrapper element inside content
            var wrap = this.getOverlay().find(".contentWrap");

            // load the page specified in the trigger
            wrap.load(this.getTrigger().attr("href"));
        }

    });
          
});

//Top menu on other pages

$(document).ready(function() {

    $("#topnav li").prepend("<span></span>"); //Throws an empty span tag right before the a tag

    $("#topnav li").each(function() { //For each list item...
        var linkText = $(this).find("a").html(); //Find the text inside of the <a> tag
        $(this).find("span").show().html(linkText); //Add the text in the <span> tag
    }); 

    $("#topnav li").hover(function() {	//On hover...
        $(this).find("span").stop().animate({
            marginTop: "-31" //Find the <span> tag and move it up 31 pixels
        }, 250);
    } , function() { //On hover out...
        $(this).find("span").stop().animate({
            marginTop: "0"  //Move the <span> back to its original state (0px)
        }, 250);
    });

});

$(window).load(function() {
    $.backstretch("images/backgrounds/cogbackground.jpg");
});