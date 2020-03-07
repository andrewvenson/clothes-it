<div class='footer-nav row' style='text-align:center; position:fixed; width:100%; bottom:0px;height:75px; background-color: #121212; color:white;z-index:99999999; opacity:.9;'>
    <div class="col" style='margin-top:10px;'>
        @if(Request::path() == "feed")
            <a href="{{url('/feed')}}"><img src="images/feedfl.png" style="width:20px; height:20px;"alt=""> </a>
        @else
            <a href="{{url('/feed')}}"><img src="images/feedol.png" style="width:20px; height:20px;"alt=""> </a>
        @endif
    </div>
    <div class="col" style='margin-top:10px;'>
        @if(Request::path() == "/" || Request::path() == "fits" )
            <a href="{{url('/')}}"><img src="images/shirtfl.png" style='width:20px; height:20px' alt=""></a>
        @else
            <a href="{{url('/')}}"><img src="images/shirtol.png" style='width:20px; height:20px' alt=""></a>
        @endif
    </div>
    <div class="col" style='margin-top:10px;'>

        @if(Request::path() == "profile")
            <a href="{{url('/profile')}}"><img src="images/userfl.png"  style='width:20px; height:20px' alt=""></a>
        @else       
            <a href="{{url('/profile')}}"><img src="images/userol.png"  style='width:20px; height:20px' alt=""></a>
        @endif
        
    </div>
</div>

