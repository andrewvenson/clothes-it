<div class="row" style='height:50px; background-color:#1f1f1f;position:fixed;top:0;width:100%;'>
    <div class='col' >
        <div style='margin-top:10px;'>
            <a href="#" ><img src="images/search.png" style='width:24px; height:24px;' alt=""></a>
        </div>
    </div>
    <div class="col" style='text-align:center;'>

        <a href="{{url('/')}}">
            <h3>clothesIt</h3>
        </a>
    </div>
    <div class="col">
        <div style="float:right;margin-top:10px;z-index: 100;">
            <a id="nav-dropitm" style="float:right;"><img src="{{URL::asset('images/menu.png')}}"  style='height:25px; width:25px;' alt=""></a>
            <a id="close-dropitm" style="display:none;float:right;"><img src="{{URL::asset('images/close.png')}}" alt=""></a>
        </div>
    </div>
</div>

<div id='dropdown' style='display:none;position:fixed;text-align:center; background-color:#1f1f1f;border: 1px solid #1f1f1f;width: 100%;padding:10px;z-index: 600;'>
            
    <div>
        <a href="#"> Filter</a><br>
    </div>
    <div>
        <a href="#">Closet</a><br>

    </div>
    <div>
        <a href="#">Cart</a><br>
    </div>
    <div>
        <a href="#">Profile</a>
    </div>
</div>