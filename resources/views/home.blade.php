@extends('layout')

@section('content')
<div class='container' style='overflow-y:scroll;height: 100%;margin-top:50px;'>
       
    @foreach($items as $item)
    <div style='position:relative;'>
        <div style="background-image: url('images/black-batman.jpg'); background-size: cover; box-shadow: 3px 4px 8px black; position:absolute; top:0; left:-5px; !important;background-color: white; width: 50px; height: 50px; border-radius: 100%;"></div>
        <div style="background-color:orange; box-shadow: 3px 4px 8px black; width: 20px; height: 20px;border-radius: 50%;position:absolute; top:5; left:30px;"></div>
        <h5 style="text-shadow: 3px 4px 8px black; width: 20px; height: 20px;border-radius: 50%;position:absolute; top:20px; left:50px;color:white;">$programmerprod</h5>
        
        <div style='overflow:hidden;' > 
            <div class='feed {{$item->id}}' style="text-align:center; background: url(uploads/{{$item->image}}); background-size:cover;">
                
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
            <a href="#" style='color:white;text-decoration:none;position:absolute;bottom:35px;left:5px; text-shadow: 3px 4px 8px black;'><h4>{{$item->name}}<span style="font-size: 12px;color:gold;font-weight:bold;">x2</span></h4> </a>
               
            <a class='more more-{{$item->id}}' id="{{$item->id}}" style='float:right;'><img src="images/more.png" style='width:18px;height:18px;' alt=""></a>                
            <a class='more close-{{$item->id}}' id="{{$item->id}}" style='display:none;float:right;'><img src="images/moreclose.png" style='width:18px;height:18px;' alt=""></a>                
        
        </div>
    </div>
    
        
    @endforeach
    
</div>



<button type="button" class='btn btn-secondary new-btn' data-toggle="modal" data-target="#new" style="background-color:black !important; border-color: black !important;position:fixed; bottom:0px;right:0px;margin:5px 5px 57px 5px;border-radius:100%;height:50px;">New</button>
<button type="button" class='btn btn-dark new-btn' data-toggle="modal" data-target="#fit" style="position:fixed; bottom:0px;left:0px;margin:5px 5px 57px 5px;border-radius:100%;width:58.02px; height:50px;">Fit</button>
@endsection

