$(document).ready(function() {
    $(".videos").click(function() {
        $(this).find("iframe").css("z-index", "0");
        $(this).find(".play").css("display", "none");
    });
});