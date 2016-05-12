$(function(){
    $("#burger").click(function(){
        $(".menu__item:not(.visible--phone)").toggle();
    });


    $("[class^=paper-form__]").on("focus", function(){
        $(this).prev("label").addClass("active");
    }).on("blur", function(){
        if($(this).val().length === 0){
            $(this).prev("label").removeClass("active");
        }
    });
});