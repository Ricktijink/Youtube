$(document).ready(function(){
    
    $(".navShowHide").on("click", function(){
        
        var main = $(".main-section-container");
        var nav = $(".side-nav-container");

        if(main.hasClass("left-padding")){
            nav.hide();
        } else {
            nav.show();
        }

        main.toggleClass("left-padding");

    });

});