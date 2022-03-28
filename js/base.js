"use strict";
$(document).ready(function () {

    $(".hstr-footer").addClass("loaded");

    $(".menu-item").click(function() {
        //console.log($(this)[0].firstChild.id);

        var page_number = $( "li" ).index( this );
        $( ".hstr-content" ).css("display" , "none");
        $( "#page" + page_number ).css("display" , "block");
    });

});
