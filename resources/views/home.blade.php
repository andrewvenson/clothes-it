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

        <div id='info{{$item->id}}' style='position:absolute; top:50px;display:none;z-index: 666;padding:10px;width:82%;'>

            <div class='description-scroll' style='height:150px;overflow-y:scroll;'>
                <p style='color:white;margin:0px;'>{{$item->description}}</p>
            </div>

            
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
                <div style='position:absolute; left:5px;bottom:35px;width:250px;'>
                    <a href="" style='text-decoration:none;font-weight:bold; text-shadow: 3px 4px 6px black;font-size:20px;'>{{$item->name}}</a>
                    <a class='edit{{$item->id}}' href="" style='font-weight:bold; font-size:22px;color:forestgreen;text-shadow: 2px 2px 4px black;display:none;'>${{$item->price}}</a>

                </div>

            @elseif($item->trade = "trade")

                <div style='position:absolute; left:5px;bottom:35px;width:250px;'>
                    <a href="" style='text-decoration:none;font-weight:bold; text-shadow: 3px 4px 6px black;font-size:20px;'>{{$item->name}}</a>
                    <img class='edit{{$item->id}}' src="images/partnership.png" style='width:35px; height:35px;display:none;' alt="">  

                </div>
        
            @endif

            <div class='edit{{$item->id}}' style='position:absolute; bottom:125px;right: 0px;display:none;'>
                <button class='btn-sm btn-warning float-right' style='margin:5px;width:53px;'>Share</button><br>
                <button class='btn-sm btn-primary float-right' style='width:53px;margin:5px;'>Save</button><br>
                <button class='btn-sm btn-secondary float-right' style='margin:5px;width:53px;'>Trade</button><br>
            </div>

            <div class='edit{{$item->id}}' style='position:absolute; bottom:40px; right:50px; display:none;'>
                <a style='color:white; font-size: 12px;'>Type: <span>{{$item->type}}</span></a>
                <a href="">|</a>
                <a style='color:white; font-size:12px;'>Color: <span>{{$item->color}}</span></a>
                <a href="">|</a>
                <a style='color:white; font-size:12px;'>Size: <span>{{$item->size}}</span></a>
            </div>
            
            

            @if($item->publicprivate == "0")
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

