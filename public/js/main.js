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

//hidden slide out button
$('.closet-btn').click(function(){
    $('.closet-so').css('display', 'block');
    $(this).css('display', 'none');
});

//slide out tool
$('.closet-so').click(function(){
    $('.closet-btn').css('display', 'block');
    $(this).css('display', 'none');
});


//Fit button on Slide out tab
$('.fit').click(function(){
    $('.item-bullet').css('display', 'block');
    $('.feed').css('filter', 'brightness(0.5)');
    $('.closet-nav').css('display', 'none');
    $('#img-picker-nav').css('display', 'block');
    
});

//Cancel Button on Image Picker
$('.cancel-picker').click(function(){
    $('.item-bullet').css('display', 'none');
    $('.item-bullet').css('background-color', 'lightgray');
    items = 0;
    $('#itm-count').text('');
    $('.feed').css('filter', 'brightness(1)');
    $('.closet-nav').css('display', 'block');
    $('#img-picker-nav').css('display', 'none');
    $('.modal-image').remove();
})


// Clicking on post
$('.feed').click(function(){
    if($('.item-bullet').css('display') == 'block'){
        if($(this).css('filter') == 'brightness(0.8)'){
            $(this).css('filter', 'brightness(.5)');
            $("#bullet-" + this.id).css('background-color', 'lightgray');
            items = items - 1;
            $('#itm-count').text(items + "x");
            $('#bloomberg' + this.id    ).remove();
        }else{
            $(this).css('filter', 'brightness(.8)');
            $("#bullet-" + this.id).css('background-color', '#59e028');
            console.log('what')
            console.log($(this).css('filter'));
    
            items = items + 1;
            console.log(items);
            $('#itm-count').text(items + "x");

            var image = $(this).find('.image-id').attr('id');

            
            console.log("wow" + image)

            var $image_url = "uploads\/" + image;

            var $x = "<div class='col-4 modal-image' style='padding: 5px'><div id=\"bloomberg" + this.id + "\" style='border-radius: 3px; box-shadow: 3px 4px 8px black;position:relative; width: 105px; height: 105px;'><a style='position:absolute; top:0; right:3px;text-shadow: 1px 1px #000;'>x</a></div></div>";
            
            
            $('.fit-collage').append($x);



            $("#bloomberg"+this.id).css("background", "url(" + $image_url + ")");
            $("#bloomberg"+this.id).css("background-size", "100% 100%");


        }
    
        if(items == 0){
            $('#itm-count').text('');
        }
    }
});


