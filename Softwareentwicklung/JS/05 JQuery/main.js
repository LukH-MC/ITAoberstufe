$(document).ready(function(){
    $("#slidingButtonRight").click(function(){
        $(".slidingPlane").animate({left: '1000px'});
    });
    $("#slidingButtonLeft").click(function(){
        $(".slidingPlane").animate({left: '10px'});
    });
    $("#toggleVis").click(function(){
        $("p").toggle();
    });
    $("#fadeVis").click(function(){
        $(".toggleVis").fadeToggle();
    });
    $("#markdown").click(function(){
        $(".markdown").css("color", "red");
    });
});