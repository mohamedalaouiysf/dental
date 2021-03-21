
$(document).ready(function(){
    $(".card").mouseenter(function () { 
        $(".card").addClass("shay");
    });
    $(".card").mouseleave(function () { 
        $(".card").removeClass("shay");
    });
});