$(document).ready(function(){
    // Check (onLoad) if the cookie is there and set the class if it is
    if ($.cookie('highcontrast') == "yes") {
        $("body").addClass("highcontrast");
        $("body").removeClass("easycontrast");
    }

    // When the span is clicked
    $("#switch").click(function () {
        // Check the current cookie value
        // If the cookie is empty or set to no, then add highcontrast
        if ($.cookie('highcontrast') == "undefined" || $.cookie('highcontrast') == "no") {
            // Set cookie value to yes
            $.cookie('highcontrast','yes', {expires: 7, path: '/'});
            // Add the class to the body
            $("body").addClass("highcontrast");
            $("body").removeClass("easycontrast");

        }
        // If the cookie was already set to yes then remove it
        else {
            $.cookie('highcontrast','no',  {expires: 7, path: '/'});
            $("body").removeClass("highcontrast");
            $("body").addClass("easycontrast");
        }
    }); 
});