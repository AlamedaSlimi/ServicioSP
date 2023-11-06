$(document).ready(function () {

    function showPopup(){
        $('.window-subs').addClass('show');
        $('.window-wrap').addClass('show');
    }

    $("#close").click(function(){
        $('.window-subs').removeClass('show');
        $('.window-wrap').removeClass('show');
    });

    $(".btn-subs").click(showPopup);

    setTimeout(showPopup, 2000);

});