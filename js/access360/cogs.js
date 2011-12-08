//cogs

var coglogo1 = $("#coglogo1");
var coglogo3 = $("#coglogo3");
var coglogo5 = $("#coglogo5");
var coglogo7 = $("#coglogo7");
var coglogo9 = $("#coglogo9");
var coglogo11 = $("#coglogo11");
var cog1 = $("#cog1");
var cog2 = $("#cog2");
var cog3 = $("#cog3");
var cog4 = $("#cog4");
var cog5 = $("#cog5");
var cog6 = $("#cog6");
var cog7 = $("#cog7");
var cog8 = $("#cog8");
var cog9 = $("#cog9");
var cog10 = $("#cog10");
var cog11 = $("#cog11");
var cog12 = $("#cog12");

var multicogs = $("#cog4, #cog6");


if($.browser.mozilla) {
    
} else {

    
var angle1 = 0;
setInterval(function(){
    angle1+=0.2;
    $(cog1).rotate(angle1);
},20);


var angle2 = 0;
setInterval(function(){
    angle2+=-0.2;
    $(cog2).rotate(angle2);
},20);

var end = new Date().getTime();


coglogo3.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog3.rotate({
                animateTo:-80,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            (cog4).rotate({
                animateTo:40,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            return false;  
        },
        mouseout : function() { 
            cog3.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            (cog4).rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            return false;  
        }
    } 
   
});


coglogo5.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog5.rotate({
                animateTo:80,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            cog6.rotate({
                animateTo:-40,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            return false;  
        },
        mouseout : function() { 
            cog5.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            cog6.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            return false;  
        }
    } 
   
});


coglogo7.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog7.rotate({
                animateTo:80,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            cog8.rotate({
                animateTo:-40,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            return false;  
        },
        mouseout : function() { 
            cog7.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            cog8.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            return false;  
        }
    } 
   
});


coglogo9.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog9.rotate({
                animateTo:80,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            cog10.rotate({
                animateTo:-40,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            return false;  
        },
        mouseout : function() { 
            cog9.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            cog10.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            return false;  
        }
    } 
   
});


coglogo11.rotate({ 
    bind: 
    { 
        mouseover : function() { 
            cog11.rotate({
                animateTo:-80,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            cog12.rotate({
                animateTo:40,
                easing: $.easing.easeOutQuad,
                duration:20000
            });
            return false;  
        },
        mouseout : function() { 
            cog11.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            cog12.rotate({
                animateTo:0,
                easing: $.easing.easeOutQuad
            });
            return false;  
        }
    } 
   
});

//end of cogs

}
