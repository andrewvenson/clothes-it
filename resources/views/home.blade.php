@extends('layout')

@section('content')
<div class='closet-nav' style='text-align:center;width:100%; height: 35px;box-shadow: 0 4px 2px -2px black;background-color:#1a1a1a; position:fixed; top: 48px;z-index:999;'>
        
        <a id='articles' href="{{url('/')}}" style='position:fixed; left: 75px;margin-top:5px;'>Articles</a>
        
        <a id='fits' href="{{url('/fits')}}" style='position:fixed; right: 75px;margin-top:5px;color:gray;'>Fits</a>
</div>

<div id='img-picker-nav'  style='width:100%;height:35px;display:none;text-align:center;background-color: black;position:fixed;top:50px;z-index:999;box-shadow: 3px 4px 8px black;opacity:.9;'>
    <a data-toggle='modal' data-target="#fit" style="position:fixed; right: 5px;color:white;margin-top:5px; text-decoration:none; font-weight:bold;">Done</a>
    <a id='itm-count' style="position:fixed;color:white;margin-top:8px;right:45%; text-decoration:none;font-size: 14px;"></a>
    
    <a class='cancel-picker' style="margin-top:5px;position:fixed; color:white; z-index:999;left: 5px; text-decoration:none; font-weight:bold;">Cancel</a>
</div>
<div class='container' style='overflow-y:scroll;height: 100%;margin-top:100px;'>
       
    @foreach($items as $item)
    <div style='position:relative;'>
        <div style="background-image: url('images/black-batman.jpg'); background-size: cover; box-shadow: 3px 4px 8px black; position:absolute; top:0; left:-5px; !important;background-color: white; width: 50px; height: 50px; border-radius: 100%;z-index:666;"></div>
        <div style="background-color:orange; box-shadow: 3px 4px 8px black; width: 20px; height: 20px;border-radius: 50%;position:absolute; top:5; left:30px;z-index:777;"></div>
        <a style="text-shadow: 3px 4px 8px black; width: 20px; height: 20px;border-radius: 50%;position:absolute; top:10px; left:50px;color:white;font-weight:bold;z-index:777">$programmerprod</a>
        <a  style='position:absolute;top:10px;right:5px;z-index:777;'><img style='width:18px; height: 18px;' src="images/star.png" alt=""></a>

        <div id='info{{$item->id}}' style='position:absolute; top:50px;display:none;z-index: 666;padding:10px;'>
            <div class='row'>
                <div class="col" style='padding:none !important;margin:none !important'>
                    <a style='color:white; font-size: 12px;'>Type: <span>{{$item->type}}</span></a>
                </div>
                <div class="col" style='padding:none;'>
                    <a style='color:white; font-size:12px;'>Color: <span>{{$item->color}}</span></a>
                </div>
                <div class="col">
                    <a style='color:white; font-size:12px;'>Size: <span>{{$item->white}}</span></a>
                </div> 
            </div>
            <p style='font-weight: bold;color:white;margin-top:10px;'>{{$item->description}}</p>

            <button class='btn btn-warning'>Share</button>
            <button class='btn btn-primary'>Save</button>
            @if($item->sell == "sell")
                <button class='btn btn-success'>Buy</button>
            @else
                <button class='btn btn-secondary'>Trade</button>
            @endif
        </div>

        <div style='overflow:hidden;' > 
            <div class='feed {{$item->id}}' id="{{$item->id}}" style="background: url(uploads/{{$item->image}}); background-size:cover;border-radius:10px;">
                
                
                
                <a class='image-id' id="{{$item->image}}" style='display:none'></a>

                <div style='text-align:center;'>   
                    <div class='cock' style='background-color:red; padding:40px;opacity: .6'>
                        <a data-toggle="modal" data-target="#delete">Delete</a>
                    </div>
                    <div class='cock' style='background-color:black; opacity: .6; padding:40px'>
                        <a>Edit</a>
                    </div>
                    <div class='cock' style='background-color:#1f1f1f; opacity: .6;padding:40px'>
                        <a>Add to fit</a>
                    </div>
                </div>
                
            </div>
            @if($item->sell == "sell")
                <a style='color:white;text-decoration:none;position:absolute;bottom:35px;left:5px; text-shadow: 3px 4px 8px black;'><h4>{{$item->name}}<span id="money{{$item->id}}" style='display:none;font-weight: bold; color:#3e9c35;'>  ${{$item->price}}</span></h4></a>
            @elseif($item->trade = "trade")
                <a href="" style='text-decoration:none;position:absolute;bottom:35px;left:5px;'><h4>{{$item->name}}</h4><span id="money{{$item->id}}" style='display:none;'><img src="images/partnership.png" style='width:30px; height:30px;' alt=""></span></a>
            @endif

            @if($item->private == "private")
                <a  style='position:absolute;bottom:45px;right:5px;'><img style='width:18px; height: 18px;' src="images/unlock.png" alt=""></a>
            @endif
            <div class='item-bullet' id="bullet-{{$item->id}}" style="display:none;position:absolute;bottom:50%;right:45%;border:1px solid lightgray;background-color: lightgray; box-shadow: 3px 4px 8px #1c1b17; height: 25px; width: 25px;border-radius: 50%;"></div>

            <a class='more more-{{$item->id}}' id="{{$item->id}}" style='float:right;'><img src="images/more.png" style='width:16px;height:16px;' alt=""></a>                
            <a class='more close-{{$item->id}}' id="{{$item->id}}" style='display:none;float:right;'><img src="images/close.png" style='width:16px;height:16px;' alt=""></a>                
        
        </div>
    </div>
    
        
    @endforeach
    
</div>

@include('partials.slideout')




@endsection

