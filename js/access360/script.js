
$("#coglogo1").rotate({ 
    bind: 
    { 
        mouseover : function() { 
            $("#cog1").rotate({
                animateTo:-80,
                easing: $.easing.easeInOutQuad,
                duration:10000
            });
            $("#cog2").rotate({
                animateTo:40,
                easing: $.easing.easeInOutQuad,
                duration:10000
            });
        },
        mouseout : function() { 
            $("#cog1").rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad,
            });
            $("#cog2").rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad,
            });
        }
    } 
   
});

$("#coglogo3").rotate({ 
    bind: 
    { 
        mouseover : function() { 
            $("#cog3").rotate({
                animateTo:-180,
                easing: $.easing.easeInOutQuad,
                duration:10000
            });
            $("#cog4").rotate({
                animateTo:140,
                easing: $.easing.easeInOutQuad,
                duration:10000
            });
        },
        mouseout : function() { 
            $("#cog3").rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad
            });
            $("#cog4").rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad
            });
        }
    } 
   
});
   
//Modal dialog increase the default animation speed to exaggerate the effect
$.fx.speeds._default = 500;
$(document).ready(function(){
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: "fade",
        hide: "fade",
        width: 500
    });

    $( "#opener" ).click(function() {
        $( "#dialog" ).dialog( "open" );
        return false;
    });
});
        