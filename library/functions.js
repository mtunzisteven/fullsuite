$(document).ready(function () {
    $(".nav-hamburger-menu").on("click", function(){
        $(".nav-hamburger-container").removeClass("hidden");
    });

    $(".nav-hamburger-close").on("click", function(){
        $(".nav-hamburger-container").addClass("hidden");
    });
});