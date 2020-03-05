@extends('layout')

@section('content')
<div class='closet-nav' style='text-align:center;width:100%; height: 35px;box-shadow: 0 4px 2px -2px black;background-color:#1a1a1a; position:fixed; top: 50px;z-index:999;'>
        
        <a href="#" style='position:fixed; left: 75px;margin-top:5px;'>Articles</a>
        
        <a href="#" style='position:fixed; right: 75px;margin-top:5px;'>Fits</a>
</div>

<div id='img-picker-nav'  style='width:100%;height:35px;display:none;text-align:center;background-color: black;position:fixed;top:50px;z-index:999;box-shadow: 3px 4px 8px black;opacity:.9;'>
    <a data-toggle='modal' data-target="#fit" style="position:fixed; right: 5px;color:white;margin-top:5px; text-decoration:none; font-weight:bold;">Done</a>
    <a id='itm-count' style="position:fixed;color:lightgreen;margin-top:5px;right:42%; text-decoration:none; font-weight:bold;"></a>
    
    <a class='cancel-picker' style="margin-top:5px;position:fixed; color:white; z-index:999;left: 5px; text-decoration:none; font-weight:bold;">Cancel</a>
</div>
<div class='container' style='overflow-y:scroll;height: 100%;margin-top:100px;'>
       
    @foreach($items as $item)
    <div style='position:relative;'>
        <div style="background-image: url('images/black-batman.jpg'); background-size: cover; box-shadow: 3px 4px 8px black; position:absolute; top:0; left:-5px; !important;background-color: white; width: 50px; height: 50px; border-radius: 100%;z-index:666;"></div>
        <div style="background-color:orange; box-shadow: 3px 4px 8px black; width: 20px; height: 20px;border-radius: 50%;position:absolute; top:5; left:30px;z-index:777;"></div>
        <p style="text-shadow: 3px 4px 8px black; width: 20px; height: 20px;border-radius: 50%;position:absolute; top:20px; left:50px;color:white;font-weight:bold;">$programmerprod</p>
        
        <div style='overflow:hidden;' > 
            <div class='feed {{$item->id}}' id="{{$item->id}}" style="text-align:center; background: url(uploads/{{$item->image}}); background-size:cover;">
                
                <div class='image-id' id="{{$item->image}}" style='display:none'></div>
                
                <div style='background-color:red; padding:40px;opacity: .6'>
                    <a data-toggle="modal" data-target="#delete">Delete</a>
                </div>
                <div style='background-color:black; opacity: .6; padding:40px'>
                    <a>Edit</a>
                </div>
                <div style='background-color:#1f1f1f; opacity: .6;padding:40px'>
                    <a>Add to fit</a>
                </div>
            </div>
            <a style='color:white;text-decoration:none;position:absolute;bottom:35px;left:5px; text-shadow: 3px 4px 8px black;'><h4>{{$item->name}}<span style="font-size: 12px;color:gold;font-weight:bold;">x2</span></h4> </a>

            <a  style='position:absolute;bottom:45px;right:5px;'><img style='width:18px; height: 18px;' src="images/unlock.png" alt=""></a>

            <div class='item-bullet' id="bullet-{{$item->id}}" style="display:none;position:absolute;bottom:50%;right:45%;border:1px solid gray;background-color: lightgray; box-shadow: 3px 4px 8px #1c1b17; height: 25px; width: 25px;border-radius: 50%;"></div>

            <a class='more more-{{$item->id}}' id="{{$item->id}}" style='float:right;'><img src="images/more.png" style='width:16px;height:16px;' alt=""></a>                
            <a class='more close-{{$item->id}}' id="{{$item->id}}" style='display:none;float:right;'><img src="images/close.png" style='width:16px;height:16px;' alt=""></a>                
        
        </div>
    </div>
    
        
    @endforeach
    
</div>

<div class='closet-btn' style='position:fixed; right: -60px;opacity: .8;  top: 50%;box-shadow: 2px 3px 4px black;z-index: 9999999;  background-color:#1c1b17; height: 100px; width: 100px; border-radius: 100%;'>
    <img src="/images/popleft.png" alt="" style='width: 25px; height: 25px;position:fixed;right:0;margin-top:38px; '>
</div>

<div class='closet-so' style='position:fixed;opacity: .8;display:none;  right: -40px; top: 50%;box-shadow: 2px 3px 4px black;z-index: 9999999;  background-color:#1c1b17; height: 100px; width: 100%; border-radius: 50px;'>
    <img src="/images/popright.png" alt="" style='width: 25px; height: 25px;position:fixed;right:0;margin-top:38px;'>
    <div style="position:fixed;right: 65px;margin-top:15px;">
        <button type="button" data-toggle="modal" data-target="#new" class='btn btn-primary' style='margin-left:5px;border-radius: 50%; width: 75px; height: 75px;'>New</button>
        <button class='btn btn-info fit' style='border-radius:50%; width: 75px; height:75px; margin-left:5px;'>Fit</button>
        <button type="button" data-toggle="modal" data-target="#filter" class='btn btn-secondary filter' style='margin-left:5px;border-radius:50%; width: 75px; height:75px'>Filter</button>
    
    </div>
</div>
<!-- 

<button type="button" class='btn btn-secondary new-btn' data-toggle="modal" data-target="#new" style="background-color:black !important; border-color: black !important;position:fixed; bottom:0px;right:0px;margin:5px 5px 57px 5px;border-radius:100%;height:50px;">New</button>
<button type="button" class='btn btn-dark new-btn' data-toggle="modal" data-target="#fit" style="position:fixed; bottom:0px;left:0px;margin:5px 5px 57px 5px;border-radius:100%;width:58.02px; height:50px;">Fit</button> -->
@endsection

