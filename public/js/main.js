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

    var closemore = ".close-" + this.id;
    var more = ".more-" + this.id;
    var photo = "." + this.id + " div";

    
    if($(photo).css('display') == 'none'){
        $(more).css("display", "none");
        $(closemore).css("display", "block");
        $(photo).css('display', 'block');
    }else{
        $(closemore).css("display", "none");
        $(more).css("display", "block");
        $(photo).css('display', 'none');
    }
});


$('#search-btn').click(function(){
    $(this).css('display', 'none');
    $('#search-inp').css('display', 'block');
    $('#search-inp-btn').css('display', 'block');
    $('.nav-title').css('display', 'none');
    $('#search-close').css('display', 'block');
});

$('#search-close').click(function(){
    $(this).css('display', 'none');
    $('#search-inp').css('display', 'none');
    $('#search-inp-btn').css('display', 'none');
    $('.nav-title').css('display', 'block');
    $('#search-btn').css('display', 'block');
});

$('.closet-btn').click(function(){
    $('.closet-so').css('display', 'block');
    $(this).css('display', 'none');
})

$('.closet-so').click(function(){
    $('.closet-btn').css('display', 'block');
    $(this).css('display', 'none');
})