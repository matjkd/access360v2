//cogs
var coglogo1 = $("#coglogo1");
var coglogo3 = $("#coglogo3");
var cog1 = $("#cog1");
var cog2 = $("#cog2");
var cog3 = $("#cog3");
var cog4 = $("#cog4");


coglogo1.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog1.rotate({
                animateTo:-80,
                easing: $.easing.easeOutQuad,
                duration:10000
            });
            cog2.rotate({
                animateTo:40,
                easing: $.easing.easeInOutQuad,
                duration:10000
            });
            return false;  
        },
        mouseout : function() { 
            cog1.rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad
            });
            cog2.rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad
            });
            return false;  
        }
    } 
   
});

coglogo3.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog3.rotate({
                animateTo:-180,
                easing: $.easing.easeOutQuad,
                duration:10000
            });
            cog4.rotate({
                animateTo:140,
                easing: $.easing.easeInOutQuad,
                duration:10000
            });
            return false;  
        },
        mouseout : function() { 
            cog3.rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad
            });
            cog4.rotate({
                animateTo:0,
                easing: $.easing.easeInOutQuad
            });
            return false;  
        }
    } 
   
});



//end of cogs