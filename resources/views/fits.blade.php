@extends('layout')

@section('content')
<div class='closet-nav' style='text-align:center;width:100%; height: 35px;box-shadow: 0 4px 2px -2px black;background-color:#1a1a1a; position:fixed; top: 50px;z-index:999;'>
        
        <a id='articles' href="{{url('/')}}" style='position:fixed; left: 75px;margin-top:5px;color:gray;'>Articles</a>
        
        <a id='fits' href="{{url('/fits')}}" style='position:fixed; right: 75px;margin-top:5px;'>Fits</a>
</div>



<div style='margin-top: 80px;'>
        <div class='outfits row' >

                @foreach($fits as $fit)
                <div class="col-4" style='padding:10px;'>
                        <div style="width: 100px; height: 100px;background-image:background-image:url('images/{{$fit->image}}');">
                                
                        </div>
                </div>
                @endforeach

              
        </div>
</div>
@endsection