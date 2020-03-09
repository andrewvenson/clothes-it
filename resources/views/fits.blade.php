@extends('layout')

@section('content')
<div class='closet-nav' style='text-align:center;width:100%; height: 35px;box-shadow: 0 4px 2px -2px black;background-color:#1a1a1a; position:fixed; top: 50px;z-index:999;'>
        
        <a id='articles' href="{{url('/')}}" style='position:fixed; left: 75px;margin-top:5px;color:gray;'>Articles</a>
        
        <a id='fits' href="{{url('/fits')}}" style='position:fixed; right: 75px;margin-top:5px;'>Fits</a>
</div>

<div style='margin-top: 100px;'>
        <div class='outfits row'> 
                @foreach ($fittys as $fit)
                <div class='col-lg-4' style='padding:10px;'>
                        <div style="padding:10px;border: 1px solid #1a1a1a;border-radius: 10px;background-color:#080808;position:relative;">
                                <div class="row" style='overflow-y: scroll; overflow-x: hidden; min-height: 250px; height: 250px; padding:0px;'>
                                        @foreach($fit as $fo)
                                                <div class="col-4" style='margin:0px;padding:0 !important;text-align:center;'>
                                                        <img src="uploads/{{$fo}}" style="margin:5px; width: 90px; height: 90px;border-radius: 3px;">
                                                </div>
                                        @endforeach  
                                </div>
                                <div style="background-image: url('images/black-batman.jpg'); background-size: cover; box-shadow: 3px 4px 8px black; position:absolute; top:-10px; left:-8px; !important; width: 50px; height: 50px; border-radius: 100%;z-index:666;"></div>
                                <a  style='position:absolute;bottom:5px;right:5px;'><img style='width:18px; height: 18px;' src="images/unlock.png" alt=""></a>
                                <p style="text-shadow: 3px 4px 8px black; width: 20px; height: 20px;position:absolute; top:5px; left:50px;color:white;font-weight:bold;">$programmerprod</p>
        
                        </div>
                        <a style='float:right;'><img src="images/more.png" style='width:16px;height:16px;' alt=""></a>                
                </div>

                @endforeach
        </div>
</div>
@endsection