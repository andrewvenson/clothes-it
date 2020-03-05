var items = 0;

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
});

$('.closet-so').click(function(){
    $('.closet-btn').css('display', 'block');
    $(this).css('display', 'none');
});


$('.fit').click(function(){
    $('.item-bullet').css('display', 'block');
    $('.feed').css('filter', 'brightness(0.5)');
    $('.closet-nav').css('display', 'none');
    $('#img-picker-nav').css('display', 'block');
    
});

$('.cancel-picker').click(function(){
    $('.item-bullet').css('display', 'none');
    $('.item-bullet').css('background-color', 'lightgray');
    items = 0;
    $('#itm-count').text('');
    $('.feed').css('filter', 'brightness(1)');
    $('.closet-nav').css('display', 'block');
    $('#img-picker-nav').css('display', 'none');
})



$('.feed').click(function(){
    if($('.item-bullet').css('display') == 'block'){
        if($(this).css('filter') == 'brightness(0.8)'){
            $(this).css('filter', 'brightness(.5)');
            $("#bullet-" + this.id).css('background-color', 'lightgray');
            items = items - 1;
            $('#itm-count').text(items + " items");
        }else{
            $(this).css('filter', 'brightness(.8)');
            $("#bullet-" + this.id).css('background-color', 'lightgreen');
            console.log('what')
            console.log($(this).css('filter'));
    
            items = items + 1;
            console.log(items);
            $('#itm-count').text(items + " items");

            var image = $(this).find('.image-id').attr('id');

            
            console.log("wow" + image)
            $('.fit-collage').append("<div id=modal" + image + " style='border: 1px solid gray; width: 100px; height: 100px;>wow</div>')");
            $('#modal' + image).css("background-image", "url('images/" + image + ")");

        }
    
        if(items == 0){
            $('#itm-count').text('');
        }
    }
});


// $('.feed.image-id').click(function(){

//     var id 
//     console.log(this.id);
//     console.log('you crazy mane')
//     console.log('wow');
// });

