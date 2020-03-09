var items = 0;

$("#nav-dropitm").click(function(){

    $(this).css('display', 'none');
    $("#close-dropitm").css('display', 'block');
    $('#dropdown').animate({
        height: '160px'
    }, 200);
    $("#dropdown").css('display', 'block');

});

$("#close-dropitm").click(function(){
    $(this).css('display', 'none');
    $("#nav-dropitm").css('display', 'block');
    $('#dropdown').animate({
        height: '0px'
    }, 200);
    $("#dropdown").css('display', 'none');

});

$('.more').click(function(){

    var closemore = ".close-" + this.id;
    var more = ".more-" + this.id;
    var photo = "." + this.id + " .cock";

    
    if($(photo).css('display') == 'none'){
        $('.' + this.id).css('filter', 'brightness(1)');
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
    $('#search-inp').animate({
        width: '275px',
    }, 500);
    $('#search-inp-btn').fadeIn(400);
    $('.nav-title').fadeOut(400);
    $('#search-close').css('display', 'block');
});

$('#search-close').click(function(){
    $(this).css('display', 'none');
    $('#search-inp').animate({
        width: '0px',
    }, 500);
    $('#search-inp').css('display', 'none');
    $('#search-inp-btn').fadeOut(100);
    $('.nav-title').fadeIn(100);
    $('#search-btn').fadeIn(500);
});

//hidden slide out button
$('.closet-btn').click(function(){
    $('.closet-so').css('display', 'block');
    $('.closet-so').animate({
        width: "100%"
    }, 400);

    $('.newitem').fadeIn(400);
    $('.filter').fadeIn(400);
    $('.fit').fadeIn(400);
    $('.organize').fadeIn(400);

    $(this).css('display', 'none');
});

//slide out tool
$('.closet-so').click(function(){
    $('.closet-btn').css('display', 'block');
    $('.closet-so').animate({
        width: "0px"
    }, 200);
    $('.newitem').fadeOut(100);
    $('.filter').fadeOut(100);
    $('.fit').fadeOut(100);
    $('.organize').fadeOut(100);
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
    $('.inputimages').remove();
})


// Clicking on post
$('.feed').click(function(){
    if($('.item-bullet').css('display') == 'block'){
        if($(this).css('filter') == 'brightness(0.8)'){
            $(this).css('filter', 'brightness(.5)');
            $("#bullet-" + this.id).css('background-color', 'lightgray');
            items = items - 1;
            $('#itm-count').text(items + "x");
            $('#bloomberg' + this.id).remove();
            $('#input' + this.id).remove();
        }else{
            $(this).css('filter', 'brightness(.8)');
            $("#bullet-" + this.id).css('background-color', '#59e028');

            items = items + 1;

            $('#itm-count').text(items + "x");

            var image = $(this).find('.image-id').attr('id');

            

            var $image_url = "uploads\/" + image;

            var $x = "<div class='col-4 modal-image' style='padding: 5px'><div id=\"bloomberg" + this.id + "\" style='border-radius: 3px; box-shadow: 3px 4px 8px black;position:relative; width: 105px; height: 105px;'><a style='position:absolute; top:0; right:3px;text-shadow: 1px 1px #000;'>x</a></div></div>";
            
            
            $('.fit-collage').append($x);
            $('.fit-collage').append("<input class='inputimages' id=\"input" + this.id + "\" style='display:none' name='fit-items[]' value=" + image + ">");



            console.log(image);

            $("#bloomberg"+this.id).css("background", "url(" + $image_url + ")");
            $("#bloomberg"+this.id).css("background-size", "100% 100%");


        }
    
        if(items == 0){
            $('#itm-count').text('');
        }
    }else if ($('.cock').css('display') !== 'block' && $(this).css('filter') != 'brightness(0.2)'){
        $(this).css('filter', 'brightness(0.2)');
        $('#info' + this.id).css('display', 'block');
        console.log('wow'); 
    }else if($(this).css('filter') == 'brightness(0.2)'){
        $(this).css('filter', 'brightness(1)');
        $('#info' + this.id).css('display', 'none');
    }
});


if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/serviceworker.js', {
        scope: '.' 
    }).then(function (registration) {
        // Registration was successful
        console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
    }, function (err) {
        // registration failed :(
        console.log('Laravel PWA: ServiceWorker registration failed: ', err);
    });
}

$('.register-button').click(function(){
    $('.login').css('display', 'none');
    $('.register').css('display', 'block');
});


$('.img-description').click(function(){
    $(this).animate({
        height: "150px"
    }, 250)
});


$('.emptystr').click(function(){
    if($(this).css('display') === 'block'){
        $(this).css('display', 'none');
        $('.goldstr').css('display', 'block');
    }
});

$('.goldstr').click(function(){
    if($(this).css('display') === 'block'){
        $(this).css('display', 'none');
        $('.emptystr').css('display', 'block');
    }
});

$('.priv-pub-inp').click(function(){
    if($(this).val() == 'public'){
        $(this).val("private");
        $('.priv-pub-lbl').text("Private");
    }else{
        $(this).val("public");
        $('.priv-pub-lbl').text("Public");
    }
});

$('.trade-sell-inp').click(function(){
    if($(this).val() == 'sell'){
        $(this).val("trade");
        $('.trade-sell-lbl').text("Trade");
        $('#item-price').css('display', 'none');
    }else{
        $(this).val("sell");
        $('.trade-sell-lbl').text("Sell");
        $('#item-price').css('display', 'block');
    }
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#name').fadeOut(200);
            $('#itm-name').text($('#name').val());
            $('.image-upload').fadeOut(200); 
            $('#img-preview').fadeIn(500);
            $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#file-input").change(function(){
    readURL(this);
});

$('#cancel-item-inp').click(function(){
    $('#img-preview').fadeOut(200);
    $('.image-upload').fadeIn(100);
    $('#name').fadeIn(200);
    $('#name').val(''); 
});

$('.color-picker .col').click(function(){
    $('.col').css('border', 'none');
    $(this).css('border', '2px solid darkgray');
    console.log('whoa u crazy');

    $('#color-select').text('Selected color: ' + $(this).css('background-color'));
    $('#color-select').css('color', $(this).css('background-color'));
    $('#color-select').css('font-weight', 'bold');
})