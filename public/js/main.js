$("#nav-dropitm").click(function(){

    $(this).css('display', 'none');
    $("#close-dropitm").css('display', 'block');
    $("#dropdown").css('display', 'block');

});

$("#close-dropitm").click(function(){
    $(this).css('display', 'none');
    $("#nav-dropitm").css('display', 'block');
    $("#dropdown").css('display', 'none');

});

$('.more').click(function(){
    if($(".feed div").css('display') == "block"){
    $(".feed div").css('display', 'none');
    }else{
        $(".feed div").css('display', 'block');
    }
});