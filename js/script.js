var base_url = $('#baseurl').val();

// remap jQuery to $
(function($) {

})(this.jQuery);

// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
	log.history = log.history || [];
	// store logs to an array for reference
	log.history.push(arguments);
	if (this.console) {
		console.log(Array.prototype.slice.call(arguments));
	}
};

function pageLoader(id) {
	$('.mainbody').fadeOut(401);

	$('#page' + id).delay(400).slideDown();

}

function sunglow() {

	$('.sunglow').fadeOut(5000);
	$('.sunglow').fadeIn(5000);
	$('.sunglow').fadeOut(5000);
	$('.sunglow').fadeIn(5000);

}


$(document).ready(function() {
	
	
	
	//tabs
	$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})


	// Declare parallax on layers
	$('.parallax-layer').parallax({
		mouseport : jQuery("#spaceport"),

	});

	// Declare parallax on layers
	$('.parallax-thumbs').parallax({
		mouseport : jQuery("#port"),
		yparallax : false
	});

	//planet hover target
	$('.planet').hover(function() {
		sunglow();

		$(this).children('.target').stop().animate({
			opacity : 1
		});
		$(this).children('.target_text').stop().animate({
			opacity : 1
		});

	}, function() {
		$(this).children('.target').stop().animate({
			opacity : 0.1
		});
		$(this).children('.target_text').stop().animate({
			opacity : 0.7
		});
	});

	$('.img_thumb').hover(function() {

		$(this).find('.hoverbox').stop().animate({
			opacity : 0.9
		});

	}, function() {
		$(this).find('.hoverbox').stop().animate({
			opacity : 0
		});
	});


 $('.img_thumb').tooltip();
	sunglow();
	
	
    $("a[rel^='prettyPhoto']").prettyPhoto();
    
     $(function () {
        $('body').popover({
            selector: '[data-toggle="popover"]',
            trigger: 'hover'
        });

        $('body').tooltip({
            selector: 'a[rel="tooltip"], [data-toggle="tooltip"]'
        });
    });




});

/*
 * Thumbs
 */
							$(document).ready(function() {
								$('#our-projects').elastislide({
									imageW : 132,
									border : 0,
									minItems : 6,
									margin : 10
								});
							});
						

 
/*================================================================*/
/*	superfish menu
/*================================================================*/
    jQuery('#navcontainer > ul').superfish({ 
        delay:       0,
        animation:   {
            opacity:'show',
            height:'show'
        },
        speed:       'fast',
        autoArrows:  false
    });
    
    
/*==================================================================*/
/* 
 *  form validation
 *  
 *==================================================================*/
  
$(document).ready(function() {
    $('#formemail').tooltip( {
        title: 'Invalid email address',
        placement: 'right',
        trigger: 'manual'
    });
    
     $('#formphone').tooltip( {
        title: 'Invalid phone number',
        placement: 'right',
        trigger: 'manual'
    });

    $('#formname').tooltip( {
        title: 'You must enter your name',
        placement: 'right',
        trigger: 'manual'
    });

    $('#callback-form').submit( function() {
        var validForm = true;
        // validate email
        if( validateEmail( $('#formemail').val() ) == false ) {
            $('#formemail').tooltip('show');
            validForm = false;
        }
        else {
            $('#formemail').tooltip('hide');
        }
        
        
         // validate phone
        if( validatePhone( $('#formphone').val() ) == false ) {
            $('#formphone').tooltip('show');
            validForm = false;
        }
        else {
            $('#formphone').tooltip('hide');
        }
        
        // validate name
        if( validateName( $('#formname').val() ) == false ) {
         	$('#formname').tooltip('show');
            validForm = false;	
         } else {
            $('#formname').tooltip('hide');
        }
       
        
        if( validForm ) {
            message( 'error', 'Ooops', "Access Denied", 3000 );
        }
        return false;
    });
});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateName(name) {
     var re = /[A-Za-z0-9]{2,40}/;
    return re.test(name);
    
        
      
    }
    
    function validatePhone(phone) {
     var re = /[A-Za-z0-9]{2,40}/;
    return re.test(phone);
    
        
      
    }


