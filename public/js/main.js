$("#nav-dropitm").click(function(){
    if($("#dropdown").css('display') == "block"){
        $("#dropdown").css('display', 'none');
    }else{
        $("#dropdown").css('display', 'block');
        $("#dropdown").css('z-index', '100');

    }
});