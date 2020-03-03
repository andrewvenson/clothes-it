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

    console.log(this.id);
    var photo = "." + this.id + " div";

    
    if($(photo).css('display') == 'none'){
        $(photo).css('display', 'block');
    }else{
        $(photo).css('display', 'none');
    }
});