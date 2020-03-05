<div class="row" style='height:50px; background-color:#1f1f1f;position:fixed;top:0;width:100%;z-index:999;'>
    <div class='col' >
        <div style='margin-top:10px;'>
            <a id='search-close' style='position:fixed; top:12px; left: 18px;display:none;'><img style='width:14px; height:14px;' src="images/popleft.png" alt=""></a>
            <a id='search-btn' href="#" ><img src="images/search.png" style='width:20px; height:20px;' alt=""></a>
            <a id='search-inp-btn' style='position:fixed; top:12px; left: 263px;display:none;'><img style='width:16px; height:16px;' src="images/search.png" alt=""></a>
            <input id='search-inp' type="text" placeholder="Search by item, fit, color, tag... " style='background-color:black; color: white;display:none;padding-left:23px;width:275px;'>

        </div>
    </div>
    <div class="col nav-title" style='text-align:center;'>

        <a href="{{url('/')}}">
            <h4 style='margin-top:10px;font-family:futura;'>clothesit</h4>
        </a>
    </div>
    <div class="col">
        <div style="float:right;margin-top:10px;z-index: 100;">
            <a id="nav-dropitm" style="float:right;"><img src="{{URL::asset('images/menu.png')}}"  style='height:20px; width:20px;' alt=""></a>
            <a id="close-dropitm" style="display:none;float:right;"><img src="{{URL::asset('images/close.png')}}" style='height:20px; width:20px;' alt=""></a>
        </div>
    </div>
</div>

<div id='dropdown' style='display:none;position:fixed;text-align:center; background-color:#1f1f1f;border: 1px solid #1f1f1f;width: 100%;padding:10px;z-index: 1000; top:50px;'>
    <div>
        <a href="#">Closet</a><br>
    </div>
    <div>
        <a href="#">Cart</a><br>
    </div>
    <div>
        <a href="#">Profile</a>
    </div>
    <div>
        <a href="#">Logout</a>
    </div>
</div>

